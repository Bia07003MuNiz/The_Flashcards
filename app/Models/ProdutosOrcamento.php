<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutosOrcamento extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function Produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
