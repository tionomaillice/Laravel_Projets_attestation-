<?php

namespace Database\Factories;

use App\Models\Super_Administrateur;
use Illuminate\Database\Eloquent\Factories\Factory;

class Super_AdministrateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Super_Administrateur::class;

    public function definition()
    {
        return [
            'email_super_administrateur' => $this->faker->unique()->safeEmail,
            'password_super_administrateur' => bcrypt('camille5763'),
            'created_at'=> now()
            //
        ];
    }
}
