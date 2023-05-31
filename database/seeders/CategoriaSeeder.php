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
                        'ordem' => 1,
                        'nome' => 'Queijos',
                        'status' => true,
                        'destaque' => true,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'id' => 2,
                        'ordem' => 2,
                        'nome' => 'Leite',
                        'status' => true,
                        'destaque' => true,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'id' => 3,
                        'ordem' => 3,
                        'nome' => 'Carne',
                        'status' => true,
                        'destaque' => true,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'id' => 4,
                        'ordem' => 4,
                        'nome' => 'Embutidos',
                        'status' => true,
                        'destaque' => true,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'id' => 5,
                        'ordem' => 5,
                        'nome' => 'Peixes',
                        'status' => true,
                        'destaque' => true,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
            ]
        );
    }
}
