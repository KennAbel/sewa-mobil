<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin', // Change this to a secure password
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => 'user', // Change this to a secure password
            'role' => 'user',
        ]);
    }
}
