@extends('layouts.master')

@section('content')

<h1 style="color:#1780BD">Informacion de la categoría</h1>
<h3>{{ $tipo_documento->nombre }}</h3>

<h4>Descripcion:</h4>
<p class="flow-text">{{ $tipo_documento->descripcion}}</p>
<h4>Tiempo máximo de respuesta o retención (en días)</h4>
  <p class="flow-text">{{$tipo_documento->tiempo_respuesta}}</p>
<table class="responsive-table">
<tr>
  <td>Fecha Creación</td>
  <td>{{ $tipo_documento->created_at }}</td>
</tr>
<tr>
  <td>Última modificación</td>
  <td>{{ $tipo_documento->updated_at }}</td>
</tr>
<tr>
  <td>
    <a href="{{ route('tipos.index') }}" class="waves-effect waves-light btn light-blue accent-3">Volver a la lista</a>
  </td>
  <td>
    {!! Form::open([
        'method' => 'DELETE',
        'route' => ['tipos.destroy', $tipo_documento->id]
    ]) !!}
    {!! Form::submit('Borrar categoría', ['class' => 'btn red darken-4']) !!}
    {!! Form::close() !!}

  </td>
  <td>
    <a href="{{url('/')}}" class="waves-effect waves-light btn blue-darken-3">Volver al inicio</a>
  </td>
</tr>
</table>

<hr>

@stop
