<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    /**
     * La tabla asociada al modelo
     *
     * @var string
     */
    protected $table = 'empleados';

    /**
     * Los atributos para la asignación masiva
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
    ];

    /**
     * Obtiene los datos asociados al empleado
     */
    public function datos()
    {
        return $this->hasOne('App\Models\Dato');
    }
}
