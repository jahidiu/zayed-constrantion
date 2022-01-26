<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_categories')->insert([
            'name'=>'Blog Post',
        ]);
        DB::table('blog_categories')->insert([
            'name'=>'Published Article',
        ]);
    }
}
