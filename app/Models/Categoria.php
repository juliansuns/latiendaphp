<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    //EXTENDER MODELO PARA RELACIONARLO CON PRODUCTO
    public function productos(){
        //1 CATEFORIA - M PRODUCTOS
        return $this->hasMany(Producto::class);

    }
}
