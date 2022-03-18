<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipe>
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
            "nom"=>$this->faker->name(),
            "nombre"=>$this->faker->numberBetween(11,18),
            "entraineur"=>$this->faker->name(),
            "poste"=>"joueur"
        ];
    }
}
