<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre',
        'precio',
        'cantidad',
        'descripcion',
        'categoria_id',
    ];

    public function getStockAttribute()
    {
        return $this->cantidad;
    }

    public function categoria()
    {
        return $this->belongsTo(Categorias::class);
    }
}
