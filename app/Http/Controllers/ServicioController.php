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
use Validator;
use App\Models\Dato;
use App\Models\Empleado;
use DateTime;

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
     * Mensajes de error para las validaciones
     *
     * @return array
     */
    public function mensajes()
    {
        return [
            'nombre.required'=>'Nombre es requerido',
            'apellido_paterno.required'=>'Apellido Paterno es requerido',
            'apellido_materno.required'=>'Apellido Materno es requerido',
            'fecha_nacimiento.required'=>'Fecha de Nacimiento es requerido',
            'fecha_nacimiento.date_format'=>'Fecha de Nacimiento debe tener el formato dd/mm/yyyy',
            'ingresos.required'=>'Ingresos es requerido',
            'ingresos.numeric'=>'Ingresos debe ser numerico'
        ];
    }

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
        $parametros= $request->all();
        $validar= Validator::make(
            $parametros,
            [
              'nombre'=>'required',
              'apellido_paterno'=>'required',
              'apellido_materno'=>'required',
              'fecha_nacimiento'=>'required|date_format:"d/m/Y"',
              'ingresos'=>'required|numeric'
            ],
            $this->mensajes()
        );
        if ($validar->fails()) {
            return Response(
                [
                'valido'=>false,
                'errores'=>$validar->errors()->getMessages()
                ]
            );
        } else {
            $parametros['fecha_nacimiento']=DateTime::createFromFormat(
                'd/m/Y',
                $parametros['fecha_nacimiento']
            )->format('Y-m-d');
            $empleado= Empleado::create($request->all());
            $dato= Dato::create($parametros+['empleados_id'=>$empleado->id]);
            return Response(
                [
                'valido'=>true,
                'empleado'=>$empleado->getAttributes(),
                'dato'=>$dato->getAttributes()
                ]
            );
        }
    }

    /**
     * Muestra los datos de un empleado en específico
     *
     * @param string $dato Datos enviados
     *
     * @return Response Datos del empleado
     */
    public function show($dato)
    {
        if (is_numeric($dato)) {
            $empleados= Empleado::with('datos')->find($dato);
            return Response($empleados);
        } else {
            $empleados= Empleado::with('datos')->where(
                'nombre',
                'LIKE',
                '%'.$dato.'%'
            )->get();
            return Response($empleados);
        }
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
