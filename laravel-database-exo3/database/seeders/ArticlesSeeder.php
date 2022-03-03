<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("articles")->insert([
            "nom" => "moha",
            "text" => "ola amigo",
            "cote"=> 1.54,
            "created_at" => now(),
        ]);
    }
}
