<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("contacts")->insert([
            "titre"=>"Contact us",
            "sousTitre"=>"There are many variations of passages of Lorem Ipsum available, but the",
            "btn"=>"send",
        ]);
        //
    }
}
