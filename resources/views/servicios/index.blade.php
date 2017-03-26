@extends('layout')

@section('content')
  <h2>Empleados</h2>
  <div role="alert" style="display:none" id="mensajes">
  </div>
  <div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4">
      {!! Form::text('dato', null, ['id'=>'dato', 'class'=>'form-control'])!!}
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4">
      {!! Form::button('Buscar', ['id'=>'buscar', 'class'=>'btn btn-success']) !!}
      {!! Form::button('Reiniciar', ['id'=>'reiniciar', 'class'=>'btn btn-primary']) !!}
    </div>
  </div><br/>

  <table class="table table-hover" id="tablaempleados">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Fecha de Nacimiento</th>
        <th>Ingresos</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($empleados as $empleado)
        <tr>
          <td>{{ $empleado->nombre }}</td>
          <td>{{ $empleado->apellido_paterno }}</td>
          <td>{{ $empleado->apellido_materno }}</td>
          @php
          $fecha= DateTime::createFromFormat(
              'Y-m-d',
              $empleado->datos->fecha_nacimiento
          )->format('d-m-Y');
          @endphp
          <td>{{ $fecha }}</td>
          <td>{{ $empleado->datos->ingresos }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <div id="paginador">
    {{ $empleados->links() }}
  </div>
@endsection
