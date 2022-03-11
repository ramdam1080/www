<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinesProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("busines_projets")->insert([
            "sousTitre"=>"Increase your client for",

            "titre"=>"Better position of Business",

            "text"=>"It is a long established fact that a reader will be distracted by the readable content of a page",

            "text2"=>"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believableThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable",

            "lien"=>"Read more",
        ]);
        DB::table("busines_projets")->insert([
            "sousTitre"=>"Previous Projects",

            "titre"=>"Better position of Business",

            "text"=>"It is a long established fact that a reader will be distracted by the readable content of a page ",

            "text2"=>"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believableThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable",

            "lien"=>"Read more",
        ]);
        //
    }
}
