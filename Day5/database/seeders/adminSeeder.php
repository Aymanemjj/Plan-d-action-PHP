<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstname' => 'admin',
            'lastname' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('0'),
            'role_id' => 2
        ]);
    }
}
