<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Teacher One',
            'email' => 'teacher1@example.com',
            'password' => Hash::make('password123'),
            'role' => 'teacher',
        ]);

        User::create([
            'name' => 'Teacher Two',
            'email' => 'teacher2@example.com',
            'password' => Hash::make('password123'),
            'role' => 'teacher',
        ]);

        User::create([
            'name' => 'Student One',
            'email' => 'student1@example.com',
            'password' => Hash::make('password123'),
            'role' => 'student',
        ]);

        User::create([
            'name' => 'Student Two',
            'email' => 'student2@example.com',
            'password' => Hash::make('password123'),
            'role' => 'student',
        ]);
    }
}
