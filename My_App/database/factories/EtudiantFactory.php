<?php

namespace Database\Factories;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Etudiant::class;

    public function definition()
    {
        return [
            'ine' => $this->faker->unique()->randomNumber(8),
            'nom_etudiant' => $this->faker->lastName,
            'prenom_etudiant' => $this->faker->firstName,
            'email_etudiant' => $this->faker->unique()->safeEmail,
            'password_etudiant' => bcrypt('password123'),
            'created_at'=>now()
            //
        ];
    }
}
