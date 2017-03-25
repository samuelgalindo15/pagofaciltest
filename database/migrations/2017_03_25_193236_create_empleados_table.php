<?php
/**
 * 2017_03_25_193236_create_empleados_table.php
 * PHP Version 7
 *
 * @category Database
 * @package  Migrations
 * @author   Samuel Galindo Rodríguez <original_magus@hotmail.com>
 * @license  https://github.com/samuelgalindo15/pagofaciltest/blob/master/LICENSE.txt Licence
 * @link     https://github.com/samuelgalindo15/pagofaciltest
 */
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Estructura de la tabla empleados
 *
 * @category Database
 * @package  Migrations
 * @author   Samuel Galindo Rodríguez <original_magus@hotmail.com>
 * @license  https://github.com/samuelgalindo15/pagofaciltest/blob/master/LICENSE.txt Licence
 * @link     https://github.com/samuelgalindo15/pagofaciltest
 */
class CreateEmpleadosTable extends Migration
{
    /**
     * Ejecuta la migración
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
            $table->string('apellido_paterno', 100);
            $table->string('apellido_materno', 100);
            $table->timestamps();
        });
    }

    /**
     * Deshace la migración
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
