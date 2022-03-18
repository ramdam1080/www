<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("abouts")->insert([
            "icone"=>"<i class='bi bi-chevron-right'></i>",
            "strong"=>"Birthday:",
            "span"=>"1 May 1995",
        ]);
        DB::table("abouts")->insert([
            "icone"=>"<i class='bi bi-chevron-right'></i>",
            "strong"=>"Website:",
            "span"=>"www.example.com",
        ]);
        DB::table("abouts")->insert([
            "icone"=>"<i class='bi bi-chevron-right'></i>",
            "strong"=>"Phone:",
            "span"=>"+123 456 7890",
        ]);
        DB::table("abouts")->insert([
            "icone"=>"<i class='bi bi-chevron-right'></i>",
            "strong"=>"city:",
            "span"=>"New york USA",
        ]);
      
        DB::table("abouts")->insert([
            "icone"=>"<i class='bi bi-chevron-right'></i>",
            "strong"=>"Age:",
            "span"=>"30",
        ]);
        DB::table("abouts")->insert([
            "icone"=>"<i class='bi bi-chevron-right'></i>",
            "strong"=>"degree:",
            "span"=>"Master",
        ]);
        DB::table("abouts")->insert([
            "icone"=>"<i class='bi bi-chevron-right'></i>",
            "strong"=>"email:",
            "span"=>"email@example.com",
        ]);
        DB::table("abouts")->insert([
            "icone"=>"<i class='bi bi-chevron-right'></i>",
            "strong"=>"Freelance:",
            "span"=>"Available",
        ]);
    }
}
