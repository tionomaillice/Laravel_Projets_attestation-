<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
// use App\Models\Demandes;


class Demandes extends Component
{
    use WithFileUploads;


    public $isBtnAddClicked = false;


    public $newDemande=[];

    public function submitForm()
    {

       // dump($this->newDemande);
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

}
