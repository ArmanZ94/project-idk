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
            'gaji_pokok' => 555,
            'note_gaji' => 'nama|jabatan',
            'karyawan_id' => 1,
        ]);

        Gaji::factory()->count(19)->create();
    }
}
