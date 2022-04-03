<?php

namespace Database\Factories;

use App\Models\Joueur;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Joueur>
 */
class JoueurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      
        // $role = Role::all();
        

  
        return [
            //
            "nom"=>$this->faker->firstName(),
            "prenom"=>$this->faker->lastName(),
            "age"=>$this->faker->numberBetween(17,36),
            "telephone"=>$this->faker->phoneNumber(),
            "email"=>$this->faker->email(),
            "genre"=>$this->faker->title(),
            "origine"=>$this->faker->country(),
            // "test"=>$i,
            "equipe_id"=>$this->faker->numberBetween(1,2)  ,
            "role_id"=> $this->faker->numberBetween(1,4),
            
        ];
    }
}
