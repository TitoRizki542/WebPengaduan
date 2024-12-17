<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Petugas;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        Admin::create([
            'nama' => 'Test Admin',
            'email' => 'admint@admin.com',
            'username' => 'admin',
            'password' => Hash::make('11111111'),
        ]);
        Petugas::create([
            'nama' => 'Test Petugas',
            'email' => 'test@example.com',
            'username' => 'petugas',
            'password' => Hash::make('11111111'),
        ]);
        User::create([
            'nama' => 'Test User',
            'email' => 'test@example.com',
            'username' => 'user',
            'password' => Hash::make('11111111'),
        ]);
    }
}
