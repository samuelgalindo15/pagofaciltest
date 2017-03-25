<?php
/**
 * 2017_03_25_193331_create_datos_table.php
 * PHP version 7
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
 * Estructura de la tabla datos
 *
 * @category Database
 * @package  Migrations
 * @author   Samuel Galindo Rodríguez <original_magus@hotmail.com>
 * @license  https://github.com/samuelgalindo15/pagofaciltest/blob/master/LICENSE.txt Licence
 * @link     https://github.com/samuelgalindo15/pagofaciltest
 */
class CreateDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empleados_id')->unsigned();
            $table->date('fecha_nacimiento');
            $table->float('ingresos', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos');
    }
}
