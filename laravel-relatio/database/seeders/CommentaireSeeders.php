<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentaireSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("commentaires")->insert([
            "name"=>"commentaire1",
            "contenue"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ad pariatur quisquam cumque numquam illo laboriosam delectus possimus reprehenderit voluptatum a, temporibus fuga aspernatur error, accusamus dicta! Incidunt, beatae natus.",
            "article_id"=>1
        ]);
        DB::table("commentaires")->insert([
            "name"=>"commentaire2",
            "contenue"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ad pariatur quisquam cumque numquam illo laboriosam delectus possimus reprehenderit voluptatum a, temporibus fuga aspernatur error, accusamus dicta! Incidunt, beatae natus.",
            "article_id"=>1
        ]);
        DB::table("commentaires")->insert([
            "name"=>"commentaire3",
            "contenue"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ad pariatur quisquam cumque numquam illo laboriosam delectus possimus reprehenderit voluptatum a, temporibus fuga aspernatur error, accusamus dicta! Incidunt, beatae natus.",
            "article_id"=>2
        ]);
        //
    }
}
