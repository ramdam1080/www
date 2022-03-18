<?php

namespace Database\Seeders;

use App\Models\footer;
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
        $this->call(TitleSeeder::class);
        $this->call(HeaderSeeder::class);
        $this->call(NavSeeder::class);
        $this->call(Profilseeder::class);
        $this->call(AboutSeeder::class);
        $this->call(FactSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(FilterSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(FooterSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
