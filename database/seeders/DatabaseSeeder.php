<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call([

            UserSeeder::class,
            CategorySeeder::class,
            BlogCategorySeeder::class,
            BlogSeeder::class,
            NewsCategorySeeder::class,
            NewsSeeder::class,
            ProjectCategorySeeder::class,
            ProjectSeeder::class,
            OurTeamSeeder::class,
            ExpertSpotlightSeeder::class,
            SliderCategorySeeder::class,
            SliderSeeder::class,
            ClientMessageSeeder::class,



        ]);
    }
}
