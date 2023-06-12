<?php

namespace Database\Factories;

use App\Models\Attestations;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttestationsFactory extends Factory
{
    protected $model= Attestations::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "contenu"=>$this->faker->text(),
            "noSerie"=> $this->faker ->swiftBicNumber,
          "type_attestation_id"=> rand(1,3),
          "user_id"=> rand(),
            "mention_id"=> rand(1,4),


        ];
    }
}
