<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Testimoni::create([
            'testimoni' => fake()->paragraphs(6, true),
            'isShow' => true,
            'name' => fake()->name(),
        ]);
    }
}
