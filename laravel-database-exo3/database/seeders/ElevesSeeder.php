<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElevesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("eleves")->insert([
            "nom" => "batou",
            "prenom" => "goulag",
            "email" => "mohamed@hotmail.com",
            "adress" => "21 chausse de gand",
            "datedenaissance" => '2020-08-05',
            "ip" => '2020.08.05',
            "created_at"=> now(),

        ]);
    }
}
