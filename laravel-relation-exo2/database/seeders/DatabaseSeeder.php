<?php

namespace Database\Seeders;

use App\Http\Controllers\userControllers;
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
        $this->call(UserSeeder::class);
        $this->call(ProfilSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
