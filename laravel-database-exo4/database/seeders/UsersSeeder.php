<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("users")->insert([
            "nom"=>"ramdam",
            "prenom"=>"mohamed",
            "age"=>"21",
            "email"=>"mohamed.ramdam@hotmail.com",
            "mdp" => Hash::make("Amnesia1080"),
            "commune" => "molenbeek",
            "adress"=> "21 chaussé de gand",
            "numero" => "0472253502"
        ]);
        DB::table("users")->insert([
            "nom"=>"goulag",
            "prenom"=>"adil",
            "age"=>"21",
            "email"=>"adil.goulag@hotmail.com",
            "mdp" => Hash::make("adil"),
            "commune" => "ixelle",
            "adress"=> "rue des artisan 82",
            "numero" => "0456326143"
        ]);
        DB::table("users")->insert([
            "nom"=>"ilies",
            "prenom"=>"zikri",
            "age"=>"25",
            "email"=>"ilies.zikri@hotmail.com",
            "mdp" => Hash::make("ilies"),
            "commune" => "laken",
            "adress"=> "a coter de rue stelys",
            "numero" => "0466666666"
        ]);
        DB::table("users")->insert([
            "nom"=>"MArcyl",
            "prenom"=>"abou",
            "age"=>"21",
            "email"=>"marcyl.abou@hotmail.com",
            "mdp" => Hash::make("marcyl"),
            "commune" => "ixelle",
            "adress"=> "jsp wlh",
            "numero" => "0477777777"
        ]);
        DB::table("users")->insert([
            "nom"=>"richard",
            "prenom"=>"jade",
            "age"=>"22",
            "email"=>"jade.richard@hotmail.com",
            "mdp" => Hash::make("jade"),
            "commune" => "woluwe saint lambert",
            "adress"=> "elle veut pas dire",
            "numero" => "va voir discord"
        ]);
    }
}

