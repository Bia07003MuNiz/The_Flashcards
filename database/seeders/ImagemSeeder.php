<?php

namespace Database\Seeders;

use App\Models\Imagem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Imagem::insert(
            [
                [
                    'produto_id' => 1,
                    'url' => 'https://static.paodeacucar.com/img/uploads/1/375/23760375.jpg',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'produto_id' => 2,
                    'url' => 'https://io.convertiez.com.br/m/superpaguemenos/shop/products/images/17461/medium/presunto-perdigao-pedaco-kg_81574.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'produto_id' => 3,
                    'url' => 'https://giassi.vtexassets.com/arquivos/ids/510999/Queijo-Mussarela-Tirol-Mini-Kg-.jpg?v=637995023836570000',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'produto_id' => 4,
                    'url' => 'https://io.convertiez.com.br/m/superpaguemenos/shop/products/images/49828/medium/mortadela-sadia-bologna-kg_96107.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'produto_id' => 5,
                    'url' => 'https://www.casamissao.com.br/wp-content/uploads/2020/12/salame-italiano-fatiado-aurora.jpg',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
