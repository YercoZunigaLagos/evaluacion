<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'marca',
        'precio',
        'costo',
        'created_at'
        
    ];
}
