<?php

namespace Database\Factories;

use App\Models\Administrateur;
use Illuminate\Database\Eloquent\Factories\Factory;


class AdministrateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Administrateur::class;

    public function definition()
    {
        return [
            'nom_administrateur' => $this->faker->firstName,
            'prenom_administrateur' => $this->faker->lastName,
            'email_administrateur' => $this->faker->unique()->safeEmail,
            'password_administrateur' => $this->faker->password,
            'attestation_id'=> rand(1,10),
            'created_at'=> now()

            //
        ];
    }
}
