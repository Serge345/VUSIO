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

<div class="input field col s3">
  {!! Form::label('remitente', 'Remintente', ['for' => 'remitente']) !!}
  {!! Form::select('remitente', $remitente)!!}
  <p class="lead"> <a href="{{url('remitentes/create')}}">agregar un nuevo remitente</a></p>

</div>

<div class="input field col s3">
  {!! Form::label('destinatario', 'Destinatario', ['for' => 'destinatario']) !!}
  {!! Form::select('destinatario', $destinatario)!!}
  <p class="lead"> <a href="{{url('destinatarios/create')}}">agregar un nuevo destinatario</a></p>
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
    <p class="lead"> <a href="{{url('tipos/create')}}">agregar un nuevo tipo de documento</a></p>
</div>

{!! Form::submit('Agregar documento', ['class' => 'btn btn-primary']) !!}
<a href="{{ url('documentos') }}" class="btn btn-info">Cancelar</a>
{!! Form::close() !!}

@stop
