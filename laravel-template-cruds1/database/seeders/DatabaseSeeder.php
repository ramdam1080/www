<?php

namespace Database\Seeders;

use App\Models\BusinesProjet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HeaderSeeder::class);
        $this->call(ImgSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(BusinesProjetSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(FooterSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
