<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\equipe;
use App\Models\Portofolio;
use App\Models\User;
use Carbon\Factory;
use Faker\Factory as FakerFactory;
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
        // \App\Models\User::factory(10)->create();
        User::factory()->count(20)->create();
        Article::factory()->count(30)->create();
        Portofolio::factory()->count(10)->create();
        equipe::factory()->count(50)->create();
    }
}
