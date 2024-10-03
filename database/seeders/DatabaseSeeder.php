<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'testadm',
            'email' => 'admin123@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'testpim',
            'email' => 'pimpinan123@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'pimpinan'
        ]);
    }
}
