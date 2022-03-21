<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("portfolios")->insert([
            "img"=>"portfolio/portfolio-1.jpg",
            "filter"=>"filter-app",
            "icone1"=>"<i class='bx bx-plus'></i>",
            "icone2"=>"<i class='bx bx-link'></i>"
        ]);
        DB::table("portfolios")->insert([
            "img"=>"portfolio/portfolio-2.jpg",
            "filter"=>"filter-web",
            "icone1"=>"<i class='bx bx-plus'></i>",
            "icone2"=>"<i class='bx bx-link'></i>"
        ]);
        DB::table("portfolios")->insert([
            "img"=>"portfolio/portfolio-3.jpg",
            "filter"=>"filter-app",
            "icone1"=>"<i class='bx bx-plus'></i>",
            "icone2"=>"<i class='bx bx-link'></i>"
        ]);
        DB::table("portfolios")->insert([
            "img"=>"portfolio/portfolio-4.jpg",
            "filter"=>"filter-card",
            "icone1"=>"<i class='bx bx-plus'></i>",
            "icone2"=>"<i class='bx bx-link'></i>"
        ]);
        DB::table("portfolios")->insert([
            "img"=>"portfolio/portfolio-5.jpg",
            "filter"=>"filter-web",
            "icone1"=>"<i class='bx bx-plus'></i>",
            "icone2"=>"<i class='bx bx-link'></i>"
        ]);
        DB::table("portfolios")->insert([
            "img"=>"portfolio/portfolio-6.jpg",
            "filter"=>"filter-app",
            "icone1"=>"<i class='bx bx-plus'></i>",
            "icone2"=>"<i class='bx bx-link'></i>"
        ]);
        DB::table("portfolios")->insert([
            "img"=>"portfolio/portfolio-7.jpg",
            "filter"=>"filter-card",
            "icone1"=>"<i class='bx bx-plus'></i>",
            "icone2"=>"<i class='bx bx-link'></i>"
        ]);
        DB::table("portfolios")->insert([
            "img"=>"portfolio/portfolio-8.jpg",
            "filter"=>"filter-card",
            "icone1"=>"<i class='bx bx-plus'></i>",
            "icone2"=>"<i class='bx bx-link'></i>"
        ]);
        DB::table("portfolios")->insert([
            "img"=>"portfolio/portfolio-9.jpg",
            "filter"=>"filter-web",
            "icone1"=>"<i class='bx bx-plus'></i>",
            "icone2"=>"<i class='bx bx-link'></i>"
        ]);
    }
}
