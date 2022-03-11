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
            "lien"=>"Home"
        ]);
        DB::table("headers")->insert([
            "lien"=>"About"
        ]);
        DB::table("headers")->insert([
            "lien"=>"Contact"
        ]);
        //
    }
}
