<?php

namespace Database\Seeders;

use App\Models\About;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'isi_about' => '
            <p><strong><img style="display: block; margin-left: auto; margin-right: auto;" src="https://akcdn.detik.net.id/visual/2019/07/11/26d3df53-6d57-4cde-8872-05c78c830b9b_169.jpeg?w=400&amp;q=90" alt="" width="400" height="225"></strong></p>
            <p><strong>&nbsp;</strong></p>
            <p>&nbsp;</p>
            <ul>
            <li>
            <p><strong>Tentang Kami</strong>: Kami adalah platform inovatif yang bertujuan untuk menyediakan solusi digital terbaik bagi para pengguna. Dengan semangat kreativitas dan teknologi, kami terus berkembang untuk memenuhi kebutuhan zaman.</p>
            </li>
            <li>
            <p><strong>Misi Kami</strong>: Membangun dunia digital yang lebih mudah, cepat, dan efisien dengan menghadirkan layanan dan produk yang berfokus pada kepuasan pelanggan.</p>
            </li>
            <li>
            <p><strong>Siapa Kami?</strong>: Kami adalah tim yang terdiri dari individu-individu berbakat yang didorong oleh passion untuk menciptakan pengalaman pengguna yang tak terlupakan.</p>
            </li>
            <li>
            <p><strong>Komitmen Kami</strong>: Kami berdedikasi untuk memberikan layanan yang terbaik dengan selalu mengedepankan inovasi dan kualitas dalam setiap langkah yang kami ambil.</p>
            </li>
            <li>
            <p><strong>Visi Kami</strong>: Menjadi pemimpin dalam industri digital dengan solusi yang inovatif, andal, dan dapat diakses oleh semua lapisan masyarakat.</p>
            </li>
            <li>
            <p><strong>Sejarah Kami</strong>: Dimulai dari mimpi kecil, kami tumbuh menjadi platform yang dipercaya oleh ribuan pengguna di seluruh dunia.</p>
            </li>
            <li>
            <p><strong>Kenapa Memilih Kami?</strong>: Karena kami percaya pada kekuatan solusi yang tepat, teknologi canggih, dan pendekatan yang ramah untuk setiap masalah yang Anda hadapi.</p>
            </li>
            </ul>
            '
        ]);
    }
}
