<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slider_categories')->insert([
            'name'=>'category-one'
        ]);
        DB::table('slider_categories')->insert([
            'name'=>'category-two'
        ]);
        DB::table('slider_categories')->insert([
            'name'=>'category-three'
        ]);
        DB::table('slider_categories')->insert([
            'name'=>'category-four'
        ]);
        DB::table('slider_categories')->insert([
            'name'=>'category-five'
        ]);
        DB::table('slider_categories')->insert([
            'name'=>'category-six'
        ]);
        DB::table('slider_categories')->insert([
            'name'=>'category-seven'
        ]);
        DB::table('slider_categories')->insert([
            'name'=>'category-eight'
        ]);
    }
}
