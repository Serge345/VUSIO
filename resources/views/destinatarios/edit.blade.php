@extends('layouts.master')


@section('content')

<h2 style="color:#1780BD">Modificar la información de un destinatario</h2>
<p class="lead"></p>
<hr>

{!! Form::model($destinatario, [
    'method' => 'PUT',
    'route' => ['destinatarios.update', $destinatario->id]
]) !!}
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
    {!! Form::label('cargo', 'Cargo', ['class' => 'control-label']) !!}
    {!! Form::text('cargo', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field col s3">
    <i class="material-icons prefix ">input</i>
    {!! Form::label('dependencia', 'Dependencia', ['class' => 'control-label']) !!}
    {!! Form::text('dependencia', null, ['class' => 'form-control']) !!}
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

{!! Form::submit('Modificar destinatario', ['class' => 'btn btn-primary']) !!}
<a href="{{ url('destinatarios') }}" class="btn btn-info">Cancelar</a>
{!! Form::close() !!}

@stop
