<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\users>
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
            "nom"=> $this->faker->firstname(),
            "prenom"=> $this->faker->lastname(),
            "password"=> Hash::make($this->faker->password()) ,
            "email"=>$this->faker->email(),
            "pdp"=> $this->faker->imageUrl(),
            "role"=>$this->faker->domainWord()
        ];
    }
}
