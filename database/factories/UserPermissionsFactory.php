<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserPermissionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numerify,
            'permission_id' => $this->faker->numerify
            //
        ];
    }
}
