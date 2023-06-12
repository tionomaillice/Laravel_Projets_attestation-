<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TypeAttestationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom_type_attestations"=> array_rand(["License","Master","Doctorat"],1)
            //
            //
        ];
    }
}
