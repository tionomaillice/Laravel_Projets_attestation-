<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DemandesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_demande' => $this->faker->date(),
            'numero_demande'=> $this->faker->numerify(),
            'document'=> $this->faker->fileExtension(),
            "user_id"=> rand(),
            "attestation_id"=> rand(),
            "statut_demande_id"=> rand(1,4),
            //
        ];
    }
}
