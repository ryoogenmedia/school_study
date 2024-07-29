<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Event::create([
            'thumbnail' => 'img/event/3.jpg',
            'schedule' => fake()->dateTime(),
            'title' => fake()->words(3, true),
            'location' => fake()->words(4, true),
            'description' => fake()->paragraphs(10, true),
            'start' => fake()->time(),
            'end' => fake()->time(),
            'slug' => fake()->word()
        ]);
    }
}
