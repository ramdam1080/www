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
            "nom"=>$this->faker->firstName(),
            "prenom"=>$this->faker->lastName(),
            "age"=>$this->faker->numberBetween(18,45),
            "email"=>$this->faker->email(),
            "mdp"=>Hash::make("moha"), 
            "dtn"=>$this->faker->date(), 
            "genre"=>$this->faker->title(),
            "role_id"=>$this->faker->numberBetween(1,4)
        ];
    }
}
