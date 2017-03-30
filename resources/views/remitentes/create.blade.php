@extends('layouts.master')


@section('content')

<h2 style="color:#1780BD">Ingresar un nuevo remitente</h2>
<p class="lead"></p>
<hr>

{!! Form::open(['route' => 'remitentes.store']) !!}

<div class="input-field col s3">
    <i class="material-icons prefix ">input</i>
    {!! Form::label('nombre', 'Nombre completo', ['class' => 'control-label']) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field col s3">
    <i class="material-icons prefix ">input</i>
    {!! Form::label('numero_identificacion', 'Cédula o NIT', ['class' => 'control-label']) !!}
    {!! Form::text('numero_identificacion', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field col s3">
    <i class="material-icons prefix ">input</i>
    {!! Form::label('ciudad', 'Ciudad', ['class' => 'control-label']) !!}
    {!! Form::text('ciudad', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field col s3">
    <i class="material-icons prefix ">input</i>
    {!! Form::label('departamento', 'Departamento', ['class' => 'control-label']) !!}
    {!! Form::text('departamento', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field col s3">
    <i class="material-icons prefix ">input</i>
    {!! Form::label('direccion', 'Direccion', ['class' => 'control-label']) !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field col s3">
    <i class="material-icons prefix ">input</i>
    {!! Form::label('correo_electronico', 'Correo electrónico', ['class' => 'control-label']) !!}
    {!! Form::text('correo_electronico', null, ['class' => 'form-control']) !!}
</div>

<div class="input field col s3">

  {!! Form::label('tipo', 'Tipo', ['for' => 'Tipo']) !!}
  {!! Form::select('tipo', array('Persona natural' => 'Persona natural', 'Entidad' => 'Entidad')) !!}
</div>

{!! Form::submit('Crear remitente', ['class' => 'btn btn-primary']) !!}
<a href="{{ url('remitentes') }}" class="btn btn-info">Cancelar</a>
{!! Form::close() !!}

@stop
