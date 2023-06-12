<?php

namespace App\Http\Livewire;

use App\Models\Permissions;
use App\Models\Roles;
use App\Models\User;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Utilisateurs extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $currentPage = PAGELIST;

    public $newUser = [];
    public $editUser = [];

    public $rolePermissions = [];

    public function render()
    {

        Carbon::setLocale("fr");

        return view('livewire.utilisateurs.index', [
            "users" => User::latest()->paginate(10)
        ])
        ->extends("layouts.master")
        ->section("contenu");
    }

    public function rules(){
        if($this->currentPage == PAGEEDITFORM){
            return [
                'editUser.nom' => 'required',
                'editUser.prenom' => 'required',
                'editUser.email' => ['required', 'email', Rule::unique("users", "email")->ignore($this->editUser['id']) ] ,
                'editUser.telephone1' => ['required', 'numeric', Rule::unique("users", "telephone1")->ignore($this->editUser['id']) ]  ,
                'editUser.sexe' => 'required',
            ];
        }

        return [
            'newUser.nom' => 'required',
            'newUser.prenom' => 'required',
            'newUser.email' => 'required|email|unique:users,email',
            'newUser.telephone1' => 'required|numeric|unique:users,telephone1',
            'newUser.sexe' => 'required',
        ];
    }

    public function goToAddUser(){
        $this->currentPage = PAGECREATEFORM;
    }

    public function goToEditUser($id){
      $this->editUser = User::find($id)->toArray();

        $this->currentPage = PAGEEDITFORM;

       $this->populateRolePermissions();
    }

    public function populateRolePermissions(){
        $this->rolePermissions["roles"] = [];
        $this->rolePermissions["permissions"] = [];


        $mapForCB = function($value){
            return $value["id"];

        };
        $roleIds = array_map($mapForCB, User::find($this->editUser["id"])->roles->toArray()); // [1, 2, 4]
        $permissionIds = array_map($mapForCB, User::find($this->editUser["id"])->permissions->toArray()); // [1, 2, 4]

        foreach(Roles::all() as $role){
            if(in_array($role->id, $roleIds)){
                array_push($this->rolePermissions["roles"], ["role_id"=>$role->id, "role_nom"=>$role->nom, "active"=>true]);
            }else{
                array_push($this->rolePermissions["roles"], ["role_id"=>$role->id, "role_nom"=>$role->nom, "active"=>false]);
            }
        }
        foreach(Permissions::all() as $permission){
            if(in_array($permission->id, $permissionIds)){
                array_push($this->rolePermissions["permissions"], ["permission_id"=>$permission->id, "permission_nom"=>$permission->nom, "active"=>true]);
            }else{
                array_push($this->rolePermissions["permissions"], ["permission_id"=>$permission->id, "permission_nom"=>$permission->nom, "active"=>false]);
            }
        }
    }
    public function updateRoleAndPermissions(){
        DB::table("user_role")->where("user_id", $this->editUser["id"])->delete();
        DB::table("user_permission")->where("user_id", $this->editUser["id"])->delete();

        foreach($this->rolePermissions["roles"] as $role){
            if($role["active"]){
                User::find($this->editUser["id"])->roles()->attach($role["role_id"]);
            }
        }

        foreach($this->rolePermissions["permissions"] as $permission){
            if($permission["active"]){
                User::find($this->editUser["id"])->permissions()->attach($permission["permission_id"]);
            }
        }

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Roles et permissions mis à jour avec succès!"]);
    }

    public function goToListUser(){
        $this->currentPage = PAGELIST;
        $this->editUser = [];
    }

    public function addUser(){

        // Vérifier que les informations envoyées par le formulaire sont correctes
        $validationAttributes = $this->validate();

        $validationAttributes["newUser"]["password"] = "password";

       // dump($validationAttributes);
        // Ajouter un nouvel utilisateur
        User::create($validationAttributes["newUser"]);

        $this->newUser = [];

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Utilisateur créé avec succès!"]);
    }

    public function updateUser(){
       // dump($this->editUser);
        // Vérifier que les informations envoyées par le formulaire sont correctes
        $validationAttributes = $this->validate();
        //dump($validationAttributes);

        User::find($this->editUser["id"])->update($validationAttributes["editUser"]);

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>
        "Utilisateur mis à jour avec succès!"]);

    }

    public function confirmPwReset(){
        $this->dispatchBrowserEvent("showConfirmMessage", ["message"=> [
            "text" => "Vous êtes sur le point de réinitialiser le mot de passe de cet utilisateur. Voulez-vous continuer?",
            "title" => "Êtes-vous sûr de continuer?",
            "type" => "warning"
        ]]);
    }

    public function resetPassword(){
        //dump("sdfghjklmù");
        User::find($this->editUser["id"])->update(["password" => Hash::make(DEFAULTCAMILLE)]);
        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Mot de passe utilisateur réinitialisé avec succès!"]);
    }

    public function confirmDelete($name, $id){
        $this->dispatchBrowserEvent("showConfirmMessage", ["message"=> [
            "text" => "Vous êtes sur le point de supprimer $name de la liste des utilisateurs. Voulez-vous continuer?",
            "title" => "Êtes-vous sûr de continuer?",
            "type" => "warning",
            "data" => [
                "user_id" => $id
            ]
        ]]);
        //User::destroy($id);
    }



    public function deleteUser($id){
        User::destroy($id);

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Utilisateur supprimé avec succès!"]);
    }
}
