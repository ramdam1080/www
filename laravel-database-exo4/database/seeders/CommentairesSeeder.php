<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentairesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("commentaires")->insert([
            "nom"=> "ramdam",
            "prenom"=>"mohamed",
            "datedepublication"=> now(),
            "commentaire" => "mashallah",
            "post" => "jsp"
        ]);
        DB::table("commentaires")->insert([
            "nom"=> "ramdam",
            "prenom"=>"mohamed",
            "datedepublication"=> now(),
            "commentaire" => "mashallah",
            "post" => "jsp"
        ]);
        DB::table("commentaires")->insert([
            "nom"=> "ramdam",
            "prenom"=>"mohamed",
            "datedepublication"=> now(),
            "commentaire" => "mashallah",
            "post" => "jsp"
        ]);
        DB::table("commentaires")->insert([
            "nom"=> "ramdam",
            "prenom"=>"mohamed",
            "datedepublication"=> now(),
            "commentaire" => "mashallah",
            "post" => "jsp"
        ]);
        DB::table("commentaires")->insert([
            "nom"=> "ramdam",
            "prenom"=>"mohamed",
            "datedepublication"=> now(),
            "commentaire" => "mashallah",
            "post" => "jsp"
        ]);
        DB::table("commentaires")->insert([
            "nom"=> "ramdam",
            "prenom"=>"mohamed",
            "datedepublication"=> now(),
            "commentaire" => "mashallah",
            "post" => "jsp"
        ]);
        DB::table("commentaires")->insert([
            "nom"=> "ramdam",
            "prenom"=>"mohamed",
            "datedepublication"=> now(),
            "commentaire" => "mashallah",
            "post" => "jsp"
        ]);
        DB::table("commentaires")->insert([
            "nom"=> "ramdam",
            "prenom"=>"mohamed",
            "datedepublication"=> now(),
            "commentaire" => "mashallah",
            "post" => "jsp"
        ]);
        DB::table("commentaires")->insert([
            "nom"=> "ramdam",
            "prenom"=>"mohamed",
            "datedepublication"=> now(),
            "commentaire" => "mashallah",
            "post" => "jsp"
        ]);
    }
}
