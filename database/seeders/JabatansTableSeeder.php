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
        ]);

        Jabatan::create([
            'id' => 2,
            'nama_jabatan' => 'TechSupport',
        ]);

        Jabatan::create([
            'id' => 3,
            'nama_jabatan' => 'Worker',
        ]);

        Jabatan::create([
            'id' => 4,
            'nama_jabatan' => 'Orang',
        ]);
    }
}
