<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nom"=>$this->faker->name(),
            "description"=>$this->faker->paragraph(20),
            "auteur"=>$this->faker->name(),
            "date"=>$this->faker->dateTime(),
            //
        ];
    }
}
