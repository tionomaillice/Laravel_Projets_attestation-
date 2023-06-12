<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RetraitsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_retrait' => $this->faker->dateTime('Y-m-d H:i:s'),
            'user_id' => $this->faker->numerify,

            //
        ];
    }
}
