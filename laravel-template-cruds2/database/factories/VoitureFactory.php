<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voiture>
 */
class VoitureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "marque"=>$this->faker->name(),
            "anne"=>$this->faker->year($max = 'now'),
            "couleur"=>$this->faker->colorName(),
            "prix"=>$this->faker->randomNumber(),
            "reduc"=>$this->faker->numberBetween( 10,  100)

            //
        ];
    }
}
