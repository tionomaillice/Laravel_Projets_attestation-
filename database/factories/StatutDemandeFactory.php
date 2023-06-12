<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StatutDemandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom_statut_demande"=> array_rand(["En attente","En cours","Terminée","Rejétée"],1)
            //
        ];
    }
}
