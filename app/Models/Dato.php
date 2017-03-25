<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    /**
     * La tabla asociada al modelo
     *
     * @var string
     */
    protected $table = 'datos';

    /**
     * Los atributos para la asignación masiva
     *
     * @var array
     */
    protected $fillable = [
        'ingresos',
        'fecha_nacimiento',
    ];

    /**
     * Obtiene al empleado asociados al dato
     */
    public function empleados()
    {
      return $this->hasOne('App\Models\Empleado');
    }

}
