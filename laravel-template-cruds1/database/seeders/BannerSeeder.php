<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("banners")->insert([
            "text"=>"Digital Marketing Landing Page 2019"
        ]);
        DB::table("banners")->insert([
            "text"=>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,"
        ]);
        DB::table("banners")->insert([
            "text"=>"Read More"
        ]);
        //
    }
}
