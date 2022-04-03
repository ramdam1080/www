<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
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
            "nom"=>"avant",
            "max"=> rand(1,5) ,
        ]);

        DB::table("roles")->insert([
            "nom"=>"centre",
            "max"=> rand(1,5) ,
        ]);
        
        DB::table("roles")->insert([
            "nom"=>"arriere",
            "max"=> rand(1,5) ,
        ]);

        DB::table("roles")->insert([
            "nom"=>"remplacent",
            "max"=> rand(1,5) ,
        ]);
    }
}
