<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Traitement1Comp extends Component
{
    public function render()
    {
        return view('livewire.traitement1.index')
        ->extends("layouts.master")
        ->section("contenu");

    }
}
