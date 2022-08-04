<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mitarbeiter>
 */
class MitarbeiterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firmen_id' => random_int(1,5),
            'vorname' => explode(" ",fake()->name())[0],
            'nachname' => explode(" ",fake()->name())[1],
            'email' => fake()->safeEmail(),
        ];
    }
}
