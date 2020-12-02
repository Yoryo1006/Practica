<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = [
        'Nombre',
        'Cupos',
        'Fecha_Realizacion',
        'Hora_Realizacion',
        'Fecha_Cierre',
        'Fecha_Hora_Cierre',
        'Descripcion',
    ];
}
