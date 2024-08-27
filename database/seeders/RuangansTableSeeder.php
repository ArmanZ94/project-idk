<?php

namespace Database\Seeders;

use App\Models\Ruangan;
use Illuminate\Database\Seeder;

class RuangansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*   
        $ruangans = [
            ['nama_ruangan' => 'Ruang IT'],
            ['nama_ruangan' => 'Ruang Manager'],
            ['nama_ruangan' => 'Ruang Produksi'],
            ['nama_ruangan' => 'Ruang Kantor'],
        ];
        
        foreach ($ruangans as $data) {
            Ruangan::create($data);
        }
        */

        Ruangan::create([
            'id' => 1,
            'nama_ruangan' => 'Ruang Manager',
        ]);

        Ruangan::create([
            'id' => 2,
            'nama_ruangan' => 'Ruang IT',
        ]);

        Ruangan::create([
            'id' => 3,
            'nama_ruangan' => 'Ruang Produksi',
        ]);

        Ruangan::create([
            'id' => 4,
            'nama_ruangan' => 'Ruang Kantor',
        ]);
    }
}
