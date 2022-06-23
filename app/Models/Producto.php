<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    //RELACION M - 1 CON CATEGORIA
    public function categoria(){

        return $this->belongsTO(Categoria::class);
    
    }
    public function marcas(){

        return $this->belongsTO(Marca::class , 'marca_id');

    }
}

