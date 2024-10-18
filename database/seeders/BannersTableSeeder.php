<?php

namespace Database\Seeders;

use App\Models\Banner;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'img_banner' => 'images/banner/banner1.png',
            'text1_banner' => "Text Banner 1",
            'text2_banner' => "Text Banner 2",
            'text3_banner' => "Text Banner 3",
        ]);

        Banner::create([
            'img_banner' => 'images/banner/banner2.png',
            'text1_banner' => "Text Banner 1",
            'text2_banner' => "Text Banner 2",
            'text3_banner' => "Text Banner 3",
        ]);

        Banner::create([
            'img_banner' => 'images/banner/banner3.png',
            'text1_banner' => "Text Banner 1",
            'text2_banner' => "Text Banner 2",
            'text3_banner' => "Text Banner 3",
        ]);
    }
}
