<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_messages')->insert([
            'first_name'=>'Jahidul',
            'last_name'=>'Islam',
            'email'=>'jahidiu2111@gmail.com',
            'phone'=>'56468445',
            'company'=>'WebArtsFactory',
            'reason'=>'Constraction',
            'message'=>'Great things happen when people with talent and determination come together to create what couldn’t be done alone. At Stantec, we don’t just know this—we live it—and we’re looking for people like you who do the same.',
        ]);
        DB::table('client_messages')->insert([
            'first_name'=>'Rasel',
            'last_name'=>'Ahmed',
            'email'=>'raselahmed@gmail.com',
            'phone'=>'64646496843',
            'company'=>'WebArtsFactory',
            'reason'=>'Constraction',
            'message'=>'Great things happen when people with talent and determination come together to create what couldn’t be done alone. At Stantec, we don’t just know this—we live it—and we’re looking for people like you who do the same.',
        ]);
        DB::table('client_messages')->insert([
            'first_name'=>'Kabir',
            'last_name'=>'Ahmed',
            'email'=>'kabir@gmail.com',
            'phone'=>'5454648641',
            'company'=>'WebArtsFactory',
            'reason'=>'Constraction',
            'message'=>'Great things happen when people with talent and determination come together to create what couldn’t be done alone. At Stantec, we don’t just know this—we live it—and we’re looking for people like you who do the same.',
        ]);
    }
}
