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
            'date' => $this->faker->date(),
            'numero'=> $this->faker->numerify(),
            'acte_naissance'=> $this->faker->fileExtension(),
            'quittance'=> $this->faker->fileExtension(),
            'recue_quittance'=> $this->faker->fileExtension(),
            'quitus'=> $this->faker->fileExtension(),
            'demande'=> $this->faker->fileExtension(),
            "user_id"=> rand(),
            "attestation_id"=> rand(),
            "statut_demande_id"=> rand(1,4),
            //
        ];
    }
}
