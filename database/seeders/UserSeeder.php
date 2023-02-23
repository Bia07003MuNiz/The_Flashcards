<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'nome' => 'Talissa',
            'email' => 'talissa@gmail.com',
            'password' => Hash::make('123456'),
            'cpf' => Str::random(),
            'tipo' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        User::insert([
            'nome' => 'Paulo',
            'email' => 'paulo@gmail.com',
            'password' => Hash::make('654321'),
            'cpf' => Str::random(),
            'tipo' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        User::insert([
            'nome' => 'Bianca',
            'email' => 'bianca@gmail.com',
            'password' => Hash::make('123456'),
            'cpf' => Str::random(),
            'tipo' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        User::insert([
            'nome' => 'Isabela',
            'email' => 'isa@gmail.com',
            'password' => Hash::make('123456'),
            'cpf' => Str::random(),
            'tipo' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        User::insert([
            'nome' => 'Arthur',
            'email' => 'artur@gmail.com',
            'password' => Hash::make('123456'),
            'cpf' => Str::random(),
            'tipo' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
