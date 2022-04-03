<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        DB::table("articles")->insert([
            "name"=>"article1",
            "description" =>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate delectus ex illo itaque obcaecati perferendis aliquam. Repellat atque sint adipisci blanditiis itaque rerum fuga? Quo iure praesentium iusto et itaque."
        ]);
        DB::table("articles")->insert([
            "name"=>"article2",
            "description" =>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate delectus ex illo itaque obcaecati perferendis aliquam. Repellat atque sint adipisci blanditiis itaque rerum fuga? Quo iure praesentium iusto et itaque."
        ]);
        //
    }
}
