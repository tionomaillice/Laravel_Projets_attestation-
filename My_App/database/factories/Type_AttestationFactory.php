<?php

namespace Database\Factories;

use App\Models\Type_Attestation;
use Illuminate\Database\Eloquent\Factories\Factory;

class Type_AttestationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Type_Attestation::class;

    public function definition()
    {
        return [
        'libelle' => $this->faker->name(),
                    'created_at'=> now()
            //
        ];
    }
}
