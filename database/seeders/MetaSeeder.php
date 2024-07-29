<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Meta::create([
            'favicon' => 'img/favicon.png',
            'logo' => 'img/logo/logo.png',
            'title' => 'My School',
            'description' => fake()->text(100),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->safeEmail(),
            'address' => fake()->address(),
            'about' => fake()->paragraphs(5, true),
        ]);
    }
}
