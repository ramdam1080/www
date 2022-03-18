<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("headers")->insert([
            "icone"=>'<i class="bx bxl-twitter"></i>',
            "class"=>"twitter"
            
        ]);
        DB::table("headers")->insert([
            "icone"=>'<i class="bx bxl-facebook"></i>',
            "class"=>"facebook"
        ]);
        DB::table("headers")->insert([
            "icone"=>'<i class="bx bxl-instagram"></i>',
            "class"=>"instagram"
        ]);
        DB::table("headers")->insert([
            "icone"=>'<i class="bx bxl-skype"></i>',
            "class"=>"skype"
        ]);
        DB::table("headers")->insert([
            "icone"=>'<i class="bx bxl-linkedin"></i>',
            "class"=>"linkedin"
        ]);
        //
    }
}
