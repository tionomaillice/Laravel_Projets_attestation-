<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TypeAttestationsComp extends Component
{
    public function render()
    {
        return view('livewire.typeattestations.index')
            ->extends("layouts.master")
            ->section("contenu");
    }
}
