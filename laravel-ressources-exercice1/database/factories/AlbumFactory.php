<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nom" => $this->faker->name(),
            "description" =>$this->faker->text(),
            "auteur" => $this->faker->name(),
            "photo" => $this->faker->numberBetween(10,72),
            //
        ];
    }
}
