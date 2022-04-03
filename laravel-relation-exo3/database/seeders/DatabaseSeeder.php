<?php

namespace Database\Seeders;

use App\Models\Joueur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([EquipeSeeder::class,RoleSeeder::class]);
        Joueur::factory(18)->create();
        // \App\Models\User::factory(10)->create();
    }
}
