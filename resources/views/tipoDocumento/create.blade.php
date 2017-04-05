@extends('layouts.master')


@section('content')

<h2 style="color:#1780BD">Agregar una nueva categoria</h2>
<p class="lead"></p>
<hr>

{!! Form::open(['route' => 'tipos.store']) !!}


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

<div class="input-field col s3">
    <i class="material-icons prefix ">input</i>
    {!! Form::label('tiempo_respuesta', 'Tiempo máximo de respuesta o retención (en días)', ['class' => 'control-label']) !!}
    {!! Form::text('tiempo_respuesta', null, ['class' => 'form-control']) !!}
</div>


{!! Form::submit('Crear categoria', ['class' => 'btn btn-primary']) !!}
<a href="{{ url('tipos') }}" class="btn btn-info">Cancelar</a>
{!! Form::close() !!}

@stop
