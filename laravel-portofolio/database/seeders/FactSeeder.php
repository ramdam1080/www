<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("facts")->insert([
            "icone"=>"<i class='bi bi-emoji-smile'></i>",
            "nombre"=>232,
            "strong"=>"Happy Clients",
            "text"=>"consequuntur quae"
        ]);
        DB::table("facts")->insert([
            "icone"=>"<i class='bi bi-journal-richtext'></i>",
            "nombre"=>521,
            "strong"=>"Projects",
            "text"=>" adipisci atque cum quia aut"
        ]);
        DB::table("facts")->insert([
            "icone"=>"<i class='bi bi-headset'></i>",
            "nombre"=>1453,
            "strong"=>"Hours Of Support",
            "text"=>"aut commodi quaerat"
        ]);
        DB::table("facts")->insert([
            "icone"=>"<i class='bi bi-people'></i>",
            "nombre"=>32,
            "strong"=>"Hard Workers",
            "text"=>"rerum asperiores"
        ]);
        //
    }
}
