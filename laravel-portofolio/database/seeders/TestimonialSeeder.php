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
        // $table->string("paragraphe");
        // $table->string("img");
        // $table->string("h3");
        // $table->string("h4");
        //
        DB::table("testimonials")->insert([
            "paragraphe"=>" <i class='bx bxs-quote-alt-left quote-icon-left'></i>
            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
            <i class='bx bxs-quote-alt-right quote-icon-right'></i>",
            "img"=>"testimonials/testimonials-1.jpg",
            "h3"=>"Saul Goodman",
            "h4"=>"Ceo &amp; Founder",
            "data"=>100,
            "bool"=> "no",

        ]);
        DB::table("testimonials")->insert([
            "paragraphe"=>"   <i class='bx bxs-quote-alt-left quote-icon-left'></i>
            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
            <i class='bx bxs-quote-alt-right quote-icon-right'></i>",
            "img"=>"testimonials/testimonials-2.jpg",
            "h3"=>"Sara Wilsson",
            "h4"=>"Designer",
            "data"=>100,
            "bool"=> "no",

        ]);
        DB::table("testimonials")->insert([
            "paragraphe"=>"   <i class='bx bxs-quote-alt-left quote-icon-left'></i>
            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
            <i class='bx bxs-quote-alt-right quote-icon-right'></i>",
            "img"=>"testimonials/testimonials-3.jpg",
            "h3"=>"Jena Karlis",
            "h4"=>"Store Owner",
            "data"=>200,
            "bool"=> "no",

        ]);
        DB::table("testimonials")->insert([
            "paragraphe"=>"   <i class='bx bxs-quote-alt-left quote-icon-left'></i>
            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
            <i class='bx bxs-quote-alt-right quote-icon-right'></i>",
            "img"=>"testimonials/testimonials-4.jpg",
            "h3"=>"Matt brandon",
            "h4"=>"Freelancer",
            "data"=>300,
            "bool"=> "no",

        ]);
        DB::table("testimonials")->insert([
            "paragraphe"=>"   <i class='bx bxs-quote-alt-left quote-icon-left'></i>
            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
            <i class='bx bxs-quote-alt-right quote-icon-right'></i>",
            "img"=>"testimonials/testimonials-5.jpg",
            "h3"=>"John Larson",
            "h4"=>"Entrepreneur",
            "data"=>400,
            "bool"=> "no",
        ]);
    }
}
