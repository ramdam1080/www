<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("skills")->insert([
            "nom"=>"HTML",
            "pourcent"=>100,
            "value"=>100
        ]);
        DB::table("skills")->insert([
            "nom"=>"CSS",
            "pourcent"=>90,
            "value"=>90
        ]);
        DB::table("skills")->insert([
            "nom"=>"Javascript",
            "pourcent"=>75,
            "value"=>75
        ]);
        DB::table("skills")->insert([
            "nom"=>"PHP",
            "pourcent"=>80,
            "value"=>80
        ]);
        DB::table("skills")->insert([
            "nom"=>"WordPress/CMS",
            "pourcent"=>90,
            "value"=>90
        ]);
        DB::table("skills")->insert([
            "nom"=>"Photoshop",
            "pourcent"=>55,
            "value"=>55
        ]);
        //
    }
}
