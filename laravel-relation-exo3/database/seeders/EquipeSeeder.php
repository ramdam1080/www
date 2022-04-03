<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("equipes")->insert([
            "nom"=>"real madrid",
            "ville"=>"madrid",
            "pays"=>"espagne",
            "max"=>14
        ]);
        DB::table("equipes")->insert([
            "nom"=>"real madridd",
            "ville"=>"madrid",
            "pays"=>"espagne",
            "max"=>12
        ]);
        DB::table("equipes")->insert([
            "nom"=>"pas d'equipe",
            "ville"=>"rien",
            "pays"=>"walo",
            "max"=>1200
        ]);
        
    }
}
