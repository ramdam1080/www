<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table("testimonials")->insert([
			'p' => '“just think about TemplateMo if you need free CSS templates for your website”',
			'h4' => 'Catherine Walk',
			'span' => 'CEO &amp; Founder',
            
		]);
        
		DB::table("testimonials")->insert([
			'p' => '“think about our website first when you need free HTML templates for your website”',
			'h4' => 'David Martin',
			'span' => 'CTO of Tech Company',
            
		]);

		DB::table("testimonials")->insert([
			'p' => '“just think about our website wherever you need free templates for your website”',
			'h4' => 'Sophia Whity',
			'span' => 'CEO and Co-Founder',
            
		]);

		DB::table("testimonials")->insert([
			'p' => '“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”',
			'h4' => 'Helen Shiny',
			'span' => 'Tech Officer',
            
		]);
		DB::table("testimonials")->insert([
			'p' => '“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”',
			'h4' => 'George Soft',
			'span' => 'Gadget Reviewer-',
            
		]);

		DB::table("testimonials")->insert([
			'p' => '“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”',
			'h4' => 'Andrew Hall',
			'span' => 'Marketing Manager',
            
		]);
		DB::table("testimonials")->insert([
			'p' => '“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”',
			'h4' => 'Maxi Power',
			'span' => 'Fashion Designer',
            
		]);

		DB::table("testimonials")->insert([
			'p' => '“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”',
			'h4' => 'Olivia Too',
			'span' => 'Creative Designer',
            
		]);
    }
}
