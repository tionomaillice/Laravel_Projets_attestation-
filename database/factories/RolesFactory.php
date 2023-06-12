<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RolesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            "nom_roles"=> array_rand(["superadmin","admin","etudiant","authentificateur"],1)
            //
        ];

    }
}
