<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $fillable = [
        'Id_Espacio',
        'Id_Evento',
        'Id_Usuario',
        'Fecha_Ingreso',
        'Hora_Ingreso',
        'Temperatura',
        'Fecha_Salida',
        'Hora_Salida',
        'Estado'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

}
