<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    public function marcas(){

        return $this->belongsTO(Marca::class , 'marca_id');

    }
}
