<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table("services")->insert([
			'img' => 'service-icon-01.png',
			'post' => 'Useful Tricks',
			'p' => 'EduWell is the professional HTML5 template for your school or university websites.',
		]);
		DB::table("services")->insert([
			'img' => 'service-icon-02.png',
			'post' => 'Creative Ideas',
			'p' => 'You can download and use this EduWell Template for your teaching and learning stuffs.',
		]);
		DB::table("services")->insert([
			'img' => 'service-icon-03.png',
			'post' => 'Ready Target',
			'p' => 'Please tell your friends about the best CSS template website that is TemplateMo.',
		]);
		DB::table("services")->insert([
			'img' => 'service-icon-04.png',
			'post' => 'Technology',
			'p' => 'Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.',
		]);
		DB::table("services")->insert([
			'img' => 'service-icon-01.png',
			'post' => 'Useful Tricks',
			'p' => 'In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.',
		]);
		DB::table("services")->insert([
            'img' => 'service-icon-02.png',
			'post' => 'Creative Ideas',
			'p' => 'Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.',
		]);
        DB::table("services")->insert([
            'img' => 'service-icon-03.png',
            'post' => 'Ready Target',
            'p' => 'In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.',
        ]);
        DB::table("services")->insert([
            'img' => 'service-icon-04.png',
            'post' => 'Technology',
            'p' => 'Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.',
        ]);
        DB::table("services")->insert([
			'img' => 'service-icon-01.png',
			'post' => 'Useful Tricks',
			'p' => 'In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.',
		]);
        DB::table("services")->insert([
            'img' => 'service-icon-02.png',
			'post' => 'Creative Ideas',
			'p' => 'Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.',
		]);
        DB::table("services")->insert([
            'img' => 'service-icon-03.png',
            'post' => 'Ready Target',
            'p' => 'In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.',
        ]);
        DB::table("services")->insert([
            'img' => 'service-icon-04.png',
            'post' => 'Technology',
            'p' => 'Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.',
        ]);
    }
}
