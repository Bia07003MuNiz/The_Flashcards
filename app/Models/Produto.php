<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'categorias_produtos');
    }

    public function imagens()
    {
        return $this->hasMany(Imagem::class);
    }

    public function possuiCategoria($idCategoria)
    {
        return $this->categorias()->where('id', $idCategoria)->exists();
    }



}
