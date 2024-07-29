<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\News::create([
            'slug' => fake()->words(3, true),
            'thumbnail' => 'img/news/1.jpg',
            'title' => fake()->words(5, true),
            'description' => fake()->paragraphs(15, true),
        ]);
    }
}
