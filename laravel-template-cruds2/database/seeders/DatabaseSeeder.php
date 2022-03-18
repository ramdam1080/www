<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Equipe;
use App\Models\User;
use App\Models\Voiture;
// use App\Models\Users;
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
        User::factory(20)->create();
        Voiture::factory(5)->create();
        Equipe::factory(30)->create();
        Article::factory(40)->create();
        // \App\Models\User::factory(10)->create();
    }
}
