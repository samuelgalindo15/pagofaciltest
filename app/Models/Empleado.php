<?php
/**
 * Empleado.php
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
     *
     * @return void
     */
    public function datos()
    {
        return $this->hasOne('App\Models\Dato', 'empleados_id');
    }
}
