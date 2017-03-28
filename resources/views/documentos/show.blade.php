@extends('layouts.master')

@section('content')

<h1 style="color:#1780BD">Informacion detallada del documento</h1>
<h3>{{ $documento->nombre }}</h3>
<h4>Tipo de documento</h4>
<p>{{$tipo->nombre}}</p>
<h4>Descripcion o asunto:</h4>
<p class="lead">{{ $documento->descripcion }}</p>
<!--////////////////////////////////////////////////////////////////-->
  <p class="flow-text">Remitente</p>
      <p> Nombre:       {{$remitente->nombre}}
          Nro identificación o NIT: {{$remitente->numero_identificacion}}
          Ciudad:       {{$remitente->ciudad}}
          Departamento: {{$remitente->departamento}}
          Dirección:    {{$remitente->direccion}}
      </p>
<!--////////////////////////////////////////////////////////////////-->
      <p class="flow-text">Destinatario</p>
      <p> Nombre:             {{$destinatario->nombre}}
          Cargo:              {{$destinatario->cargo}}
          Dependencia:        {{$destinatario->dependencia}}
          Dirección:          {{$destinatario->direccion}}
          Correo electrónico: {{$destinatario->correo_electronico}}
      </p>
<!--///////////////////////////////////////////////////////////////-->
<table class="striped">
      <tr>
        <td>Fecha de creación</td>
        <td>{{ $documento->fecha_entrada}}</td>
      </tr>
      <tr>
        <td>Última modificación</td>
        <td>{{ $documento->updated_at }}</td>
      </tr>
</table>
<!--//////////////////////////////////////////////////////////////-->
<hr>
<p>
<a href="{{ route('documentos.index') }}" class="waves-effect waves-light btn light-blue accent-3">Volver a la lista</a>
{!! Form::open([
    'method' => 'DELETE',
    'route' => ['documentos.destroy', $documento->id]
]) !!}
    {!! Form::submit('Eliminar documento', ['class' => 'btn red darken-4']) !!}
{!! Form::close() !!}


<a href="{{url('/')}}" class="waves-effect waves-light btn blue-darken-3">Volver al inicio</a>
</p>
@stop
