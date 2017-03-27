@extends('layouts.master')


@section('content')

<h2 style="color:#1780BD">Agregar un nuevo documento</h2>
<p class="lead"></p>
<hr>

{!! Form::open(['route' => 'documentos.store']) !!}

<div class="input-field col s3">
    <i class="material-icons prefix ">input</i>
    {!! Form::label('numero_radicado', 'Número de radicado', ['class' => 'control-label']) !!}
    {!! Form::text('numero_radicado', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field col s3">
    <i class="material-icons prefix ">input</i>
    {!! Form::label('nombre', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field col s3">
    <i class="material-icons prefix ">email</i>
    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field col s3">
    <i class="material-icons prefix ">input</i>
    {!! Form::label('descripcion', 'Asunto o descripcion del documento', ['class' => 'control-label']) !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <i class="material-icons prefix ">lock_outline</i>
    {!! Form::label('password_confirmation', 'Confirmar Password',['class' => 'control-label']) !!}
    {!! Form::password('password_confirmation', null,['class' => 'form-control']) !!}
</div>

<div class="input field col s3">
  {!! Form::label('Privilegios', 'Privilegios', ['for' => 'tipo']) !!}
  {!! Form::select('tipo', array('usuario' => 'Usuario', 'administrador' => 'Administrador')) !!}
</div>


{!! Form::submit('Crear usuario', ['class' => 'btn btn-primary']) !!}
<a href="{{ url('usuario') }}" class="btn btn-info">Cancelar</a>
{!! Form::close() !!}

@stop
