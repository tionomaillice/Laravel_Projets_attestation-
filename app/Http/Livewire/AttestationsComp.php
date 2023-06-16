<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AttestationsComp extends Component
{
    public function render()
    {
        return view('livewire.attestations.index')
        ->extends("layouts.master")
        ->section("contenu");
    }
}
