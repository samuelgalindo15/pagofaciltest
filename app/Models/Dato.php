<?php
/**
 * Dato.php
 * PHP Version 7
 *
 * @category Models
 * @package  Models
 * @author   Samuel Galindo Rodríguez <original_magus@hotmail.com>
 * @license  https://github.com/samuelgalindo15/pagofaciltest/blob/master/LICENSE.txt Licence
 * @link     https://github.com/samuelgalindo15/pagofaciltest
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modelo asociada a la tabla
 *
 * @category Models
 * @package  Models
 * @author   Samuel Galindo Rodríguez <original_magus@hotmail.com>
 * @license  https://github.com/samuelgalindo15/pagofaciltest/blob/master/LICENSE.txt Licence
 * @link     https://github.com/samuelgalindo15/pagofaciltest
 */
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
        'empleados_id'
    ];

    /**
     * Obtiene al empleado asociados al dato
     *
     * @return void
     */
    public function empleados()
    {
        return $this->hasOne('App\Models\Empleado');
    }

}
