<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function produtos()
    {
        return $this->belongsToMany(Produto::class, 'categorias_produtos');
    }
}
