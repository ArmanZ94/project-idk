<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
            'role_id' => 2,
        ]);

        User::create([
            'name' => 'users',
            'email' => 'users@users.com',
            'password' => Hash::make('users123'),
            'role_id' => 3,
        ]);

        User::create([
            'name' => 'unver',
            'email' => 'unver@unver.com',
            'password' => Hash::make('unver123'),
            'role_id' => 1,
        ]);
    }
}
