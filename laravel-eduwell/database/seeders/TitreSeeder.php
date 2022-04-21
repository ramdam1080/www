<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table("titres")->insert([
			'h1' => 'Best Place To Learn Graphic <em>Design!</em>',
			'h2' => 'Welcome to our school',
		]);

		DB::table("titres")->insert([
			'h1' => 'Provided <em>Services</em>',
			'h2' => 'Our Services',
		]);

		DB::table("titres")->insert([
			'h1' => 'What You Can <em>Learn</em>',
			'h2' => 'OUR COURSES',
		]);

		DB::table("titres")->insert([
            'h1' => 'What They <em>Think</em>',
			'h2' => 'Testimonials',
		]);

        DB::table("titres")->insert([
            'h1' => 'Say <em>Hello</em>',
            'h2' => 'Contact us',
        ]);
    }
}
