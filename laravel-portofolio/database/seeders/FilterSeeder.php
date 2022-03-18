<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("filters")->insert([
            "filter"=>"all",
            "class"=>"filter-active",
            "data"=>"*"
        ]);
        DB::table("filters")->insert([
            "filter"=>"app",
            "class"=>"",
            "data"=>".filter-app"
        ]);
        DB::table("filters")->insert([
            "filter"=>"card",
            "class"=>"",
            "data"=>".filter-card"
        ]);
        DB::table("filters")->insert([
            "filter"=>"web",
            "class"=>"",
            "data"=>".filter-web"
        ]);

        //
    }
}
