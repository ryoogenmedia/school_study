<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Slider::create([
            'sub_title' => fake()->words(3, true),
            'title' => fake()->words(5, true),
            'description' => fake()->paragraphs(3, true),
            'image' => 'img/slider/1.jpg'
        ]);
    }
}
