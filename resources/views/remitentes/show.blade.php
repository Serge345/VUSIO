@extends('layouts.master')

@section('content')

<h1 style="color:#1780BD">Informacion del remitente</h1>
<h3>{{ $remitente->nombre }}</h3>

<h4>Cédula o NIT:</h4>
<p class="flow-text">{{ $remitente->numero_identificacion }}</p>
<h4>Correo electrónico</h4>
  <p class="flow-text">{{$remitente->correo_electronico}}</p>
<table class="responsive-table">
  <td>Ciudad</td>
  <td>{{ $remitente->ciudad }}</td>
</tr>
<tr>
  <td>Departamento</td>

  <td>{{ $remitente->departamento }}</td>
</tr>
<tr>
  <td>Dirección</td>

  <td>{{ $remitente->direccion }}</td>
</tr>
<tr>
  <td>Fecha Creación</td>
  <td>{{ $remitente->created_at }}</td>
</tr>
<tr>
  <td>Última modificación</td>
  <td>{{ $remitente->updated_at }}</td>
</tr>
<tr>
  <td>
    <a href="{{ route('remitentes.index') }}" class="waves-effect waves-light btn light-blue accent-3">Volver a la lista</a>
  </td>
  <td>
    {!! Form::open([
        'method' => 'DELETE',
        'route' => ['remitentes.destroy', $remitente->id]
    ]) !!}
    {!! Form::submit('Borrar remitente', ['class' => 'btn red darken-4']) !!}
    {!! Form::close() !!}

  </td>
  <td>
    <a href="{{url('/')}}" class="waves-effect waves-light btn blue-darken-3">Volver al inicio</a>
  </td>
</tr>
</table>

<hr>

@stop
