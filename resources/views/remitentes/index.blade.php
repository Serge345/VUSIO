@extends('layouts.master')

@section('content')

<h1 style="color:#1780BD">Remitentes en el sistema:</h1>
<p class="lead"><a href="{{url('remitentes/create')}}">Agregar uno nuevo</a></p>
<hr>



<p>
  @foreach($remitentes as $remitente)

<h3 >{{ $remitente->nombre }}</h3>
<p >{{ $remitente->direccion}}</p>

<p>
    <a href="{{ route('remitentes.show', $remitente->id) }}" class="btn btn-info">Ver remitente</a>
    <a href="{{ route('remitentes.edit', $remitente->id) }}" class="btn btn-primary">Editar remitente</a>
</p>

@endforeach

    <a href="{{ url('/') }}" class="btn btn-info">Volver al inicio</a>

</p>
<hr>


@stop
