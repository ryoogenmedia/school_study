<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'facebook',
                'url' => 'www.facebook.com',
                'icon' => 'fa fa-facebook',
            ],
            [
                'name' => 'instagram',
                'url' => 'www.instagram.com',
                'icon' => 'fa fa-instagram',
            ],
            [
                'name' => 'youtube',
                'url' => 'www.youtube.com',
                'icon' => 'fa fa-youtube',
            ],
            [
                'name' => 'linkedid',
                'url' => 'www.linkedid.com',
                'icon' => 'fa fa-linkedid',
            ],
        ];
        foreach ($datas as $data) {
            \App\Models\SocialMedia::create($data);
        }
    }
}
