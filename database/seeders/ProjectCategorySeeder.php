<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_categories')->insert([
            'name'=>'Project Post',
        ]);
        DB::table('project_categories')->insert([
            'name'=>'Published Project',
        ]);
    }
}
