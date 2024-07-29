<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Jurusan::create([
            'thumbnail' => 'img/course/1.jpg',
            'title' => fake()->words(4, true),
            'sub_title' => fake()->words(2, true),
            'slug' => "jurusan-slug-" . fake()->word(),
            'description' => fake()->paragraphs(15, true),
        ]);
    }
}
