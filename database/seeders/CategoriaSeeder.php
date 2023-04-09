<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::insert(
            [
                    [
                        'id' => 1,
                        'nome' => 'Queijos',
                        'destaque' => true,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'id' => 2,
                        'nome' => 'Leite',
                        'destaque' => true,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'id' => 3,
                        'nome' => 'Carne',
                        'destaque' => true,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'id' => 4,
                        'nome' => 'Embutidos',
                        'destaque' => true,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'id' => 5,
                        'nome' => 'Peixes',
                        'destaque' => true,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
            ]
        );
    }
}
