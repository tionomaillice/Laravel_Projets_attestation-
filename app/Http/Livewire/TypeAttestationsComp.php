<?php

namespace App\Http\Livewire;
use App\Models\TypeAttestations;
use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;


class TypeAttestationsComp extends Component
{
    use WithPagination;
    protected $paginationTheme="bootstrap";
    public $search="";
    public $isAddTypeAttestations= false;
    public $newTypeAttestationsName="";


    public function render()
    {
            Carbon::setLocale("fr");
        $searchCriteria="%".$this->search."%";
        $data= [
            "type_attestations"=> TypeAttestations::where("nom_type_attestations","like",$searchCriteria)-> latest()->paginate(5)
        ];
        return view('livewire.typeattestations.index',$data)
            ->extends("layouts.master")
            ->section("contenu");
    }

    public function toggleShowAddTypeAttestationsForm(){
        if( $this->isAddTypeAttestations){
            $this->isAddTypeAttestations =false;
            $this->newTypeAttestationsName="";
            $this->resetErrorBag(["newTypeAttestationsName"]);


        }
        else{
            $this->isAddTypeAttestations =true;
        }

    }

    public function addNewTypeAttestations(){
        $validated =$this-> validate([
            "newTypeAttestationsName"=>"required|unique:type_attestations,nom_type_attestations"
        ]);
        TypeAttestations::create(["nom_type_attestations"=>$validated["newTypeAttestationsName"]]);
        $this->toggleShowAddTypeAttestationsForm();

    }

}
