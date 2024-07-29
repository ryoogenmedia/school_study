<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Message::create([
            'name' => fake()->name(),
            'email' => fake()->email(),
            'message' => fake()->paragraphs(3, true),
        ]);
    }
}
