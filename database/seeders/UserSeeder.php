<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['name' => 'admin','email' => 'admin@example.com', 'role' => 'admin', 'password' => 'admin']);
        User::create(['name' => 'user','email' => 'user@example.com', 'role' => 'user', 'password' => 'user']);
}
}