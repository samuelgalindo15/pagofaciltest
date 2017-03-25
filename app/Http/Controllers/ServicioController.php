<?php
/**
 * ServicioController.php
 * PHP Version 7
 *
 * @category Controllers
 * @package  Http
 * @author   Samuel Galindo Rodríguez <original_magus@hotmail.com>
 * @license  https://github.com/samuelgalindo15/pagofaciltest/blob/master/LICENSE.txt Licence
 * @link     https://github.com/samuelgalindo15/pagofaciltest
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Procesos que se le pueden aplicar a los empleados
 *
 * @category Controllers
 * @package  Http
 * @author   Samuel Galindo Rodríguez <original_magus@hotmail.com>
 * @license  https://github.com/samuelgalindo15/pagofaciltest/blob/master/LICENSE.txt Licence
 * @link     https://github.com/samuelgalindo15/pagofaciltest
 */
class ServicioController extends Controller
{
    /**
     * Muestra a todos los empleados
     *
     * @return void
     */
    public function index()
    {
        //
    }

    /**
     * Muestra el formulario para crear al nuevo empleado
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Guarda al nuevo empleado
     *
     * @param Request $request Datos enviados
     *
     * @return Response Status del proceso
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Muestra los datos de un empleado en específico
     *
     * @param string $dato Datos enviados
     *
     * @return void
     */
    public function show($dato)
    {
        //
    }

    /**
     * Muestra el formulario para editar al empleado
     *
     * @param int $id Identificador del empleado
     *
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Actualiza a un empleado en específico
     *
     * @param Request $request Datos enviados
     * @param int     $id      Identificador del empleado
     *
     * @return Response Status del proceso
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Elimina a un empleado en específico
     *
     * @param int $id Identificador del empleado
     *
     * @return Response Status del proceso
     */
    public function destroy($id)
    {
        //
    }
}
