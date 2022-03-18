<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        DB::table("footers")->insert([
            "text1"=> "&copy; Copyright",
            "text2"=> "iPortfolio",
        ]);
        DB::table("footers")->insert([
            "text1"=> "Designed by",
            "text2"=> "BootsrapMade",
        ]);
        DB::table("footers")->insert([
            "text1"=> "<i class='bi bi-arrow-up-short'></i>",
            "text2"=> "",
        ]);
        //
    }
}
