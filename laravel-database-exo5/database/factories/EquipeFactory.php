<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\equipe>
 */
class EquipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            "nom" => $this->faker->name(),
            "ville" => "jsp",
            "nbrdejoueur" => $this->faker->numberBetween(1,20),
            "nbrdeposte" => $this->faker->numberBetween(1,10),
        ];
    }
}
