<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
// use App\Models\Demandes;
use Illuminate\Validation\Rule;




class Demandes extends Component
{
    use WithFileUploads;


    public $isBtnAddClicked = false;

    public $newDemande=[];

    protected $rules=[
            'newDemande.acte_naissance'=> 'required',
            'newDemande.quittance'=>'required',
            'newDemande.recue_quittance'=>'required',
            'newDemande.quitus'=>'required',
            'newDemande.demande'=>'required',

    ];
    // protected $messages=[
    //     'acte_naissance.required'=>'acte_naissance cannot be empty',
    //     'quittance.required'=>'quittance cannot be empty',
    //     'recue_quittance'=>'recue_quittance cannot be empty',
    //     'quitus.required'=>'quitus cannot be empty',
    //     'demande.required'=>'demande cannot be empty',
    //   ];
    //   protected $validationAttributes=[
    //     'acte_naissance'=>'acte_naissance file',
    //     'quittance'=>'quittance file',
    //     'recue_quittance'=>'recue_quittance file',
    //     'quitus'=>'quitus file',
    //     'demande'=>'demande file',
    //   ];

    public function submitForm()
    {

    //    dump($this->newDemande);
        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Demandes déposer avec succès!"]);

    }


    public function render()
    {

        return view('livewire.demandes.index', [
                "demandes"=> Demandes::all()
        ])
            ->extends("layouts.master")
            ->section("contenu");
    }
    public function goToCreateDemande(){
        $this ->isBtnAddClicked=true;
}
    public function goToVue(){
        $this ->isBtnAddClicked=false;
}
    // public function addDemande(){
    //    $this ->validate();
    // //   dump($this->newDemande);


    // }

}
