<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'user_id' => (string) Str::uuid(),
            'firstName' => 'Admin',
            'lastName' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
            'role' => 'admin',
            'money' => 0,
        ]);

        User::create([
            'user_id' => (string) Str::uuid(),
            'firstName' => 'User1',
            'lastName' => 'User',
            'email' => 'user1@example.com',
            'password' => Hash::make('12345'),
            'role' => 'user',
            'money' => 200,
        ]);

        User::create([
            'user_id' => (string) Str::uuid(),
            'firstName' => 'User2',
            'lastName' => 'User',
            'email' => 'user32@example.com',
            'password' => Hash::make('12345'),
            'role' => 'user',
            'money' => 1000,
        ]);
    }
}
