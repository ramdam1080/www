<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
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
            "nom"=> $this->faker->firstName(),
            "prenom"=>$this->faker->lastName(),
            "age"=>$this->faker->numberBetween(18,48),
            "naissance"=>$this->faker->date(),
            "email"=>$this->faker->email(),
            "password"=> Hash::make("test"),
            "album"=>$this->faker->numberBetween(2,52),


        ];
    }
}
