<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /** @use HasFactory<\Database\Factories\ProductoFactory> */

    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'cantidad',
        'categoria',
        'codigo_barras',
        'imagen',
        'activo',
    ];
    
}
