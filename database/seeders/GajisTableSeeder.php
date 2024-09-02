<?php

namespace Database\Seeders;

use App\Models\Gaji;
use Illuminate\Database\Seeder;

class GajisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gaji::create([
            'id' => 1,
            'gaji_pokok' => 1000000,
            'note_gaji' => 'gaji orang standar',
        ]);

        Gaji::create([
            'id' => 2,
            'gaji_pokok' => 2000000,
            'note_gaji' => 'gaji orang bekasi',
        ]);

        Gaji::create([
            'id' => 3,
            'gaji_pokok' => 3000000,
            'note_gaji' => 'gaji orang elit',
        ]);

        // Creating multiple users using a factory
        //Karyawan::factory()->count(5)->create();
    }
}
