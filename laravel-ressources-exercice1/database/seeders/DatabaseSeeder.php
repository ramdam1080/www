<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Photo;
use App\Models\User;
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
        User::factory(5)->create();
        Album::factory(10)->create();
        Photo::factory(20)->create();
        // \App\Models\User::factory(10)->create();
    }
}
