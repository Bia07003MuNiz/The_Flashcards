<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::insert(
            [
                [
                    'id' => 1,
                    'codigo' => rand(1001,9999),
                    'nome' => 'Leite',
                    'informacoes' =>fake()->paragraph(),
                    'valor' => 10,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 2,
                    'codigo' => rand(1001,9999),
                    'nome' => 'Presunto',
                    'informacoes' =>fake()->paragraph(),
                    'valor' => 11,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 3,
                    'codigo' => rand(1001,9999),
                    'nome' => 'Mussarela',
                    'informacoes' =>fake()->paragraph(),
                    'valor' => 12,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 4,
                    'codigo' => rand(1001,9999),
                    'nome' => 'Mortadela',
                    'informacoes' =>fake()->paragraph(),
                    'valor' => 13,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 5,
                    'codigo' => rand(1001,9999),
                    'nome' => 'Salame',
                    'informacoes' =>fake()->paragraph(),
                    'valor' => 14,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
     }
}
