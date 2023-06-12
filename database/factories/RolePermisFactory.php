<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RolePermisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'role_id' => $this->faker->numerify,
            'permission_id' => $this->faker->numerify
            //
        ];
    }
}
