<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Demandes extends Component
{
    public function render()
    {
        return view('livewire.demandes.index')
            ->extends("layouts.master")
            ->section("contenu");
    }
}
