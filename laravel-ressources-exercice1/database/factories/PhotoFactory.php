<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nom"=> $this->faker->lastName(),
            "lien"=>$this->faker->url(),
            "album"=>$this->faker->firstName(),
            "favori"=>"non"
            //
        ];
    }
}
