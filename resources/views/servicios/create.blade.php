@extends('layout')

@section('content')
  <h2>Creación de Empleados</h2>
  <div role="alert" style="display:none" id="mensajes">

  </div>
  {!! Form::open(['url' => '', 'id'=>'servicio']) !!}
    <div class="form-group">
      {!! Form::label('nombre', 'Nombre') !!}
      {!! Form::text('nombre', null, ['id'=>'nombre', 'class'=>'form-control', 'placeholder'=>'Nombre']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('apellidoP', 'Apellido Paterno') !!}
      {!! Form::text('apellido_paterno', null, ['id'=>'apellido_paterno', 'class'=>'form-control', 'placeholder'=>'Apellido Paterno']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('apellidoM', 'Apellido Materno') !!}
      {!! Form::text('apellido_materno', null, ['id'=>'apellido_materno', 'class'=>'form-control', 'placeholder'=>'Apellido Materno']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('fechana', 'Fecha Nacimiento') !!}
      {!! Form::text('fecha_nacimiento', null, ['id'=>'fecha_nacimiento', 'class'=>'form-control', 'placeholder'=>'Fecha Nacimiento']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('ingresos', 'Ingresos') !!}
      {!! Form::text('ingresos', null, ['id'=>'ingresos', 'class'=>'form-control', 'placeholder'=>'Ingresos']) !!}
    </div>
    {!! Form::button('Guardar', ['id'=>'guardar', 'class'=>'btn btn-success']) !!}
  {!! Form::close() !!}
@endsection
