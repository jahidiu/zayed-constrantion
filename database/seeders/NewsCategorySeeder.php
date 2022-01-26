<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_categories')->insert([
            'name'=>'news Post',
        ]);
        DB::table('news_categories')->insert([
            'name'=>'news Article',
        ]);
    }
}
