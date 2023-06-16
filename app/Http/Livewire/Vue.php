<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Vue extends Component
{
    public function render()
    {
        return view('livewire.vue.index')
        ->extends("layouts.master")
        ->section("contenu");
    }
}
