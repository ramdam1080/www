<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("roles")->insert([
           "nom"=>"secretaire",
           "nombres" => 1,
        ]);
        DB::table("roles")->insert([
           "nom"=>"concierge",
           "nombres" => 2,
        ]);
        DB::table("roles")->insert([
           "nom"=>"netoyage",
           "nombres" => 3,
        ]);
        DB::table("roles")->insert([
           "nom"=>"annimateur",
           "nombres" => 4,
        ]);
        DB::table("roles")->insert([
           "nom"=>"actiris",
           "nombres" => 5,
        ]);
    }
}
