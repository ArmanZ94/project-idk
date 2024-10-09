<?php

namespace Database\Seeders;

use App\Models\Artikel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ArtikelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artikel::create([
            'judul_artikel' => 'Left 4 Dead 2',
            'img_artikel' => 'artikel1.jpg',
            'isi_artikel' => "Left 4 Dead 2 is a 2009 first-person shooter game developed and published by Valve. The sequel to Left 4 Dead (2008) and the second game in the Left 4 Dead series, it was released for Microsoft Windows and Xbox 360 in November 2009, Mac OS X in October 2010, and Linux in July 2013.
                            <br> Left 4 Dead 2 builds upon cooperatively focused gameplay and Valve's proprietary Source engine, the same game engine used in the original Left 4 Dead. Set during the aftermath of an apocalyptic pandemic, the game focuses on four new Survivors, fighting against hordes of zombies known as the Infected, who develop severe psychosis and act extremely aggressive. The Survivors must fight their way through five campaigns, interspersed with safe houses that act as checkpoints, with the goal of escape at each campaign's finale. The gameplay is procedurally altered by the \"AI Director 2.0\", which monitors the players' performance and adjusts the scenario to provide a dynamic challenge. Other new features include new types of Special Infected and an arsenal of melee weapons.
                            <br> The game made its world premiere at E3 2009 with a trailer during the Microsoft press event. Prior to release, it received mixed critical and community reactions, and attracted an unusually high volume of controversy about its graphic content. In response, alterations were made to the cover art, but both Australia and Germany refused to rate the unmodified edition at the time of release. Despite this, the game was met with positive critical reviews, and is considered to be one of the greatest video games ever made. ",
            'user_id' => 1,
        ]);

        Artikel::create([
            'judul_artikel' => 'Terraria',
            'img_artikel' => 'artikel2.jpg',
            'isi_artikel' => "Terraria is a 2011 action-adventure sandbox game developed by Re-Logic. The game was first released for Windows and has since been ported to other PC and console platforms. The game features exploration, crafting, building, painting, and combat with a variety of creatures in a procedurally generated 2D world. Terraria is one of the best-selling video games of all time, selling 58.7 million copies as of 2024. ",
            'user_id' => 1,
        ]);

        Artikel::create([
            'judul_artikel' => 'Black Myth: Wukong',
            'img_artikel' => 'artikel3.jpg',
            'isi_artikel' => "Black Myth: Wukong is a 2024 action role-playing game developed and published by Game Science. The game is inspired by the classical Chinese novel Journey to the West and follows an anthropomorphic monkey based on Sun Wukong from the novel.
                            <br> Black Myth: Wukong was released for PlayStation 5 and Windows on August 20, 2024, with an Xbox Series X/S version. The game received generally favorable reviews from critics. It sold 18 million units within two weeks, making it one of the fastest-selling games of all time. An expansion for the game is planned for release. ",
            'user_id' => 1,
        ]);
    }
}
