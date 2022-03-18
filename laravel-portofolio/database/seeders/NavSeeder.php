<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("navs")->insert([
            "href"=>"#hero",
            "class"=>"nav-link scrollto active",
            "lien"=> "<i class='bx bx-home'></i>",
            "span"=>"Home"
        ]);
        DB::table("navs")->insert([
            "href"=>"#about",
            "class"=>"nav-link scrollto",
            "lien"=> "<i class='bx bx-user'></i> ",
            "span"=>"About"
        ]);
        DB::table("navs")->insert([
            "href"=>"#resume",
            "class"=>"nav-link scrollto",
            "lien"=> "<i class='bx bx-file-blank'></i> ",
            "span"=>"Resume",
        ]);
        DB::table("navs")->insert([
            "href"=>"#portfolio",
            "class"=>"nav-link scrollto",
            "lien"=> "<i class='bx bx-book-content'></i> ",
            "span"=>"Portfolio"
        ]);
        DB::table("navs")->insert([
            "href"=>"#services",
            "class"=>"nav-link scrollto",
            "lien"=> "<i class='bx bx-server'></i>",
            "span"=>" Services"
        ]);
        DB::table("navs")->insert([
            "href"=>"#contact",
            "class"=>"nav-link scrollto",
            "lien"=> "<i class='bx bx-envelope'></i> ",
            "span"=>"Contact"
        ]);
        
    
        
        
        //
    }
}
