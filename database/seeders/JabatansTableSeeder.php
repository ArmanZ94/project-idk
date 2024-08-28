<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Seeder;

class JabatansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jabatan::create([
            'id' => 1,
            'nama_jabatan' => 'Manager',
            'gaji_pokok' => '5000000',
        ]);

        Jabatan::create([
            'id' => 2,
            'nama_jabatan' => 'TechSupport',
            'gaji_pokok' => '3000000',
        ]);

        Jabatan::create([
            'id' => 3,
            'nama_jabatan' => 'Worker',
            'gaji_pokok' => '2000000',
        ]);

        Jabatan::create([
            'id' => 4,
            'nama_jabatan' => 'Orang',
            'gaji_pokok' => '3500000',
        ]);
    }
}
