<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Espacio extends Model
{
    protected $fillable = [
        'Nombre',
        'Disponibilidad',
    ];
}
