<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'category_id'=>1,
            'title' => 'Balancing ambition, sustainability, and strict building codes to deliver affordability for thousands of university students',
            'image' => '01.png',
            'details' => 'The California student-housing market is a microcosm of the housing challenges that are faced in California, nationally, and globally. Increasing student populations and demand for a higher quality of life and user experience drive the discussion. Other factors include increasing resource and material scarcity, higher sustainability and energy use goals, and ever-increasing costs paired with decreasing budgets. All these define the challenges universities, developers, and designers face.',
            'created_by' => 1,
            'updated_by' => 1,
            'status' => 1,

        ]);
        DB::table('sliders')->insert([
            'category_id'=>2,
            'title' => 'Microtunneling 101: Good things come in small packages',
            'image' => '02.png',
            'details' => 'The California student-housing market is a microcosm of the housing challenges that are faced in California, nationally, and globally. Increasing student populations and demand for a higher quality of life and user experience drive the discussion. Other factors include increasing resource and material scarcity, higher sustainability and energy use goals, and ever-increasing costs paired with decreasing budgets. All these define the challenges universities, developers, and designers face.',
            'created_by' => 1,
            'updated_by' => 1,
            'status' => 1,

        ]);
        DB::table('sliders')->insert([
            'category_id'=>3,
            'title' => 'Does your company understand the risks of not transitioning to a low-carbon economy?',
           'image' => '03.png',
            'details' => 'The California student-housing market is a microcosm of the housing challenges that are faced in California, nationally, and globally. Increasing student populations and demand for a higher quality of life and user experience drive the discussion. Other factors include increasing resource and material scarcity, higher sustainability and energy use goals, and ever-increasing costs paired with decreasing budgets. All these define the challenges universities, developers, and designers face.',
            'created_by' => 1,
            'updated_by' => 1,
            'status' => 1,

        ]);
        DB::table('sliders')->insert([
            'category_id'=>1,
            'title' => 'How is transit responding to reopening',
            'image' => '04.png',
            'details' => 'The California student-housing market is a microcosm of the housing challenges that are faced in California, nationally, and globally. Increasing student populations and demand for a higher quality of life and user experience drive the discussion. Other factors include increasing resource and material scarcity, higher sustainability and energy use goals, and ever-increasing costs paired with decreasing budgets. All these define the challenges universities, developers, and designers face.',
            'created_by' => 1,
            'updated_by' => 1,
            'status' => 1,

        ]);
        DB::table('sliders')->insert([
            'category_id'=>2,
            'title' => 'All Hands on Deck: Building Strong Public Partnerships for Your Next Water Infrastructure Project',
            'image' => '01.png',
            'details' => 'The California student-housing market is a microcosm of the housing challenges that are faced in California, nationally, and globally. Increasing student populations and demand for a higher quality of life and user experience drive the discussion. Other factors include increasing resource and material scarcity, higher sustainability and energy use goals, and ever-increasing costs paired with decreasing budgets. All these define the challenges universities, developers, and designers face.',
            'created_by' => 1,
            'updated_by' => 1,
            'status' => 1,

        ]);
        DB::table('sliders')->insert([
            'category_id'=>4,
            'title' => 'Improving Dam Safety with Risk Informed Decision Making',
            'image' => '02.png',
            'details' => 'The California student-housing market is a microcosm of the housing challenges that are faced in California, nationally, and globally. Increasing student populations and demand for a higher quality of life and user experience drive the discussion. Other factors include increasing resource and material scarcity, higher sustainability and energy use goals, and ever-increasing costs paired with decreasing budgets. All these define the challenges universities, developers, and designers face.',
            'created_by' => 1,
            'updated_by' => 1,
            'status' => 1,

        ]);
        DB::table('sliders')->insert([
            'category_id'=>5,
            'title' => 'Adapting to 21st Century Water Resource Challenges',
            'image' => '03.png',
            'details' => 'The California student-housing market is a microcosm of the housing challenges that are faced in California, nationally, and globally. Increasing student populations and demand for a higher quality of life and user experience drive the discussion. Other factors include increasing resource and material scarcity, higher sustainability and energy use goals, and ever-increasing costs paired with decreasing budgets. All these define the challenges universities, developers, and designers face.',
            'created_by' => 1,
            'updated_by' => 1,
            'status' => 1,

        ]);
        DB::table('sliders')->insert([
            'category_id'=>5,
            'title' => 'The State of the Art in Selenium Management and Regulation – Are Regulations Ahead of the Science?',
            'image' => '04.png',
            'details' => 'The California student-housing market is a microcosm of the housing challenges that are faced in California, nationally, and globally. Increasing student populations and demand for a higher quality of life and user experience drive the discussion. Other factors include increasing resource and material scarcity, higher sustainability and energy use goals, and ever-increasing costs paired with decreasing budgets. All these define the challenges universities, developers, and designers face.',
            'created_by' => 1,
            'updated_by' => 1,
            'status' => 1,

        ]);
        DB::table('sliders')->insert([
            'category_id'=>5,
            'title' => 'Balancing ambition, sustainability',
            'image' => '01.png',
            'details' => 'The California student-housing market is a microcosm of the housing challenges that are faced in California, nationally, and globally. Increasing student populations and demand for a higher quality of life and user experience drive the discussion. Other factors include increasing resource and material scarcity, higher sustainability and energy use goals, and ever-increasing costs paired with decreasing budgets. All these define the challenges universities, developers, and designers face.',
            'created_by' => 1,
            'updated_by' => 1,
            'status' => 1,

        ]);
        DB::table('sliders')->insert([
            'category_id'=>8,
            'title' => 'Balancing ambition, sustainability, and strict building codes to deliver affordability for thousands of university students',
            'image' => '02.png',
            'details' => 'The California student-housing market is a microcosm of the housing challenges that are faced in California, nationally, and globally. Increasing student populations and demand for a higher quality of life and user experience drive the discussion. Other factors include increasing resource and material scarcity, higher sustainability and energy use goals, and ever-increasing costs paired with decreasing budgets. All these define the challenges universities, developers, and designers face.',
            'created_by' => 1,
            'updated_by' => 1,
            'status' => 1,

        ]);
    }
}
