<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TraitementComp extends Component
{
    public function render()
    {
        return view('livewire.traitement.index')
            ->extends("layouts.master")
            ->section("contenu");
    }
}
