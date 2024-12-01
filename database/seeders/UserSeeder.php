<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Laura Ivo Perangin-angin',
            'email' => '20202020@unima.ac.id',
            'role' => 'user',
            'password' => Hash::make('20202020')
        ]);
    }
}
