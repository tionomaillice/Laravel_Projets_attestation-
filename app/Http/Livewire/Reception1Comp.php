<?php

namespace App\Http\Livewire;

use App\Models\Demandes;
use Livewire\Component;
use Livewire\WithPagination;

class Reception1Comp extends Component
{
    // public $search="";
    // use WithPagination;
    // protected $paginationTheme="bootstrap";

    public function render()
    {
            // $data =[
            //     "demandes"=> Demandes::latest()->paginate(10)
            // ];
        return view('livewire.reception1-index')
            ->extends("layouts.master")
            ->section("contenu");
    }
}
