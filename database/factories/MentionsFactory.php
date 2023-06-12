<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MentionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom_mentions"=> array_rand(["Bien","Très bien","Passable","Excellent"],1)
            //
        ];
    }
}
