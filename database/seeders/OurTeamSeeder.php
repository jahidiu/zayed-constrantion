<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OurTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('our_teams')->insert([
            'name' =>'Gord Johnston',
            'designation' => 'President & Chief Executive Officer',
            'slug' => 'Gord-Johnston-President-&-Chief-Executive-Officer',
            'image' => '01.jpg',
            'details' => 'Gord is the president and CEO of Stantec, responsible for providing executive leadership to the Company and managing its growth. He has over 30 years of private and public sector experience in the design and project management of infrastructure projects throughout North America and abroad. Having progressed through various leadership roles after joining Stantec’s Edmonton-based Water practice in 1990, Gord has served as the Water business line leader, as executive vice president of the Infrastructure business operating unit, and as an active participant in Stantec’s acquisition sourcing and integration efforts.',
            'created_by' => 1,
            'updated_by' => 1,
            'status' => 1,

        ]);
        DB::table('our_teams')->insert([
            'name' =>'Theresa Jang',
            'designation' => 'Executive Vice President and Chief Financial Officer',
            'slug' => 'Theresa-Jang-Executive-Vice-President-and-Chief-Financial-Officer',
            'image' => '02.jpg',
            'details' => 'Gord is the president and CEO of Stantec, responsible for providing executive leadership to the Company and managing its growth. He has over 30 years of private and public sector experience in the design and project management of infrastructure projects throughout North America and abroad. Having progressed through various leadership roles after joining Stantec’s Edmonton-based Water practice in 1990, Gord has served as the Water business line leader, as executive vice president of the Infrastructure business operating unit, and as an active participant in Stantec’s acquisition sourcing and integration efforts.',
            'created_by' => 1,
            'updated_by' => 1,
            'status' => 1,

        ]);
        DB::table('our_teams')->insert([
            'name' =>'Tino DiManno',
            'designation' => 'Executive Vice President & Chief Business Officer',
            'slug' => 'Tino-DiManno-Executive-Vice-President-&-Chief-Business-Officer',
            'image' => '03.jpg',
            'details' => 'Gord is the president and CEO of Stantec, responsible for providing executive leadership to the Company and managing its growth. He has over 30 years of private and public sector experience in the design and project management of infrastructure projects throughout North America and abroad. Having progressed through various leadership roles after joining Stantec’s Edmonton-based Water practice in 1990, Gord has served as the Water business line leader, as executive vice president of the Infrastructure business operating unit, and as an active participant in Stantec’s acquisition sourcing and integration efforts.',
            'created_by' => 1,
            'updated_by' => 1,
            'status' => 1,

        ]);
        DB::table('our_teams')->insert([
            'name' =>'Dr. Marshall Davert',
            'designation' => 'Executive Vice President & Chief Innovation Officer',
            'slug' => 'Dr-Marshall-Davert-Executive-Vice-President-&-Chief-Innovation-Officer',
            'image' => '04.jpg',
            'details' => 'Gord is the president and CEO of Stantec, responsible for providing executive leadership to the Company and managing its growth. He has over 30 years of private and public sector experience in the design and project management of infrastructure projects throughout North America and abroad. Having progressed through various leadership roles after joining Stantec’s Edmonton-based Water practice in 1990, Gord has served as the Water business line leader, as executive vice president of the Infrastructure business operating unit, and as an active participant in Stantec’s acquisition sourcing and integration efforts.',
            'created_by' => 1,
            'updated_by' => 1,
            'status' => 1,

        ]);
        DB::table('our_teams')->insert([
            'name' =>'Asifa Samji',
            'designation' => 'Executive Vice President, Chief Human Resources Officer',
            'slug' => 'Asifa-Executive-Vice-President,-Chief-Human-Resources-Officer',
            'image' => '05.jpg',
            'details' => 'Gord is the president and CEO of Stantec, responsible for providing executive leadership to the Company and managing its growth. He has over 30 years of private and public sector experience in the design and project management of infrastructure projects throughout North America and abroad. Having progressed through various leadership roles after joining Stantec’s Edmonton-based Water practice in 1990, Gord has served as the Water business line leader, as executive vice president of the Infrastructure business operating unit, and as an active participant in Stantec’s acquisition sourcing and integration efforts.',
            'created_by' => 1,
            'updated_by' => 1,
            'status' => 1,

        ]);
    }
}
