<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("imgs")->insert([
            "url"=>"images/logo.png"
        ]);
        DB::table("imgs")->insert([
            "url"=>"images/box_img.png"
        ]);
        DB::table("imgs")->insert([
            "url"=>"images/business_img.jpg"
        ]);
        DB::table("imgs")->insert([
            "url"=>"images/projects_img.png"
        ]);
        DB::table("imgs")->insert([
            "url"=>"images/plan1.png"
        ]);
        //
    }
}
