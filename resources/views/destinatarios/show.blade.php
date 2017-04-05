@extends('layouts.master')

@section('content')

<h1 style="color:#1780BD">Informacion del destinatario</h1>
<h3>{{ $destinatario->nombre }}</h3>

<h4>Cédula:</h4>
<p class="flow-text">{{ $destinatario->numero_identificacion }}</p>
<h4>Correo electrónico</h4>
  <p class="flow-text">{{$destinatario->correo_electronico}}</p>
<table class="responsive-table">
  <td>Cargo</td>
  <td>{{ $destinatario->cargo }}</td>
</tr>
<tr>
  <td>Dependencia</td>

  <td>{{ $destinatario->dependencia }}</td>
</tr>
<tr>
  <td>Dirección</td>

  <td>{{ $destinatario->direccion }}</td>
</tr>
<tr>
  <td>Fecha Creación</td>
  <td>{{ $destinatario->created_at }}</td>
</tr>
<tr>
  <td>Última modificación</td>
  <td>{{ $destinatario->updated_at }}</td>
</tr>
<tr>
  <td>
    <a href="{{ route('destinatarios.index') }}" class="waves-effect waves-light btn light-blue accent-3">Volver a la lista</a>
  </td>
  <td>
    {!! Form::open([
        'method' => 'DELETE',
        'route' => ['destinatarios.destroy', $destinatario->id]
    ]) !!}
    {!! Form::submit('Borrar destinatario', ['class' => 'btn red darken-4']) !!}
    {!! Form::close() !!}

  </td>
  <td>
    <a href="{{url('/')}}" class="waves-effect waves-light btn blue-darken-3">Volver al inicio</a>
  </td>
</tr>
</table>

<hr>

@stop
