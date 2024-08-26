<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Karyawan;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            KaryawansTableSeeder::class,
			UsersTableSeeder::class,
        ]);
    }
}
