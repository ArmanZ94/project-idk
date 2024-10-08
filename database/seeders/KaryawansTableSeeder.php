<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Seeder;

class KaryawansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Karyawan::create([
            'nama' => 'Test Subject',
            'jabatan_id' => 1,
            'ruangan_id' => 1,
        ]);

        // Creating multiple users using a factory
        Karyawan::factory()->count(19)->create();
    }
}
