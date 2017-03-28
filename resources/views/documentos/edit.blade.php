@extends('layouts.master')


@section('content')

<h2 style="color:#1780BD">Cambiar información del documento</h2>
<p class="lead"></p>
<hr>

{!! Form::model($documento, [
    'method' => 'PUT',
    'route' => ['documentos.update', $documento->id]
]) !!}
<div class="input-field col s3">
    <i class="material-icons prefix ">input</i>
    {!! Form::label('numero_radicado', 'Número de radicado', ['class' => 'control-label']) !!}
    {!! Form::text('numero_radicado', null, ['class' => 'form-control']) !!}
</div>

<div class="input field col s3">
  {!! Form::label('remitente', 'Remintente', ['for' => 'remitente']) !!}
  {!! Form::select('remitente', $remitentes)!!}
</div>

<div class="input field col s3">
  {!! Form::label('destinatario', 'Destinatario', ['for' => 'destinatario']) !!}
  {!! Form::select('destinatario', $destinatarios)!!}
</div>

<div class="input-field col s3">
    <i class="material-icons prefix ">input</i>
    {!! Form::label('nombre', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field col s3">
    <i class="material-icons prefix ">input</i>
    {!! Form::label('descripcion', 'Asunto o descripcion del documento', ['class' => 'control-label']) !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="input field col s3">
  {!! Form::label('tipoDocumento', 'Tipo de documento', ['for' => 'tipo']) !!}
  {!! Form::select('tipo',$tipo)!!}
</div>

{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
<a href="{{ url('documentos') }}" class="btn btn-info">Cancelar</a>
{!! Form::close() !!}

@stop
