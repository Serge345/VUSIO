@extends('layouts.master')

@section('content')

<h1 style="color:#1780BD">Informacion detallada del documento</h1>
<h3>{{ $documento->nombre }}</h3>
<h4>Tipo de documento</h4>
<p class="flow-text">{{$tipo->nombre}}</p>
<h4>Descripcion o asunto:</h4>
<p class="flow-text">{{ $documento->descripcion }}</p>
<!--////////////////////////////////////////////////////////////////-->
  <p class="flow-text">Remitente</p>
      <table class="striped">
      <tr>
          <td>Nombre:</td>
          <td>{{$remitente->nombre}}</td>
      </tr>
      <tr>
          <td>Nro identificación o NIT:</td>
          <td>{{$remitente->numero_identificacion}}</td>
      </tr>
      <tr>
          <td>Ciudad:</td>
          <td>{{$remitente->ciudad}}</td>
      </tr>
          <td>Departamento:</td>
          <td>{{$remitente->departamento}}</td>
      <tr>
          <td>Dirección:</td>
          <td>{{$remitente->direccion}}</td>
      </tr>
<!--////////////////////////////////////////////////////////////////-->
      <tr>
        <td colspan="2"><p class="flow-text">Destinatario</p></td>
      </tr>
      <tr>
           <td>Nombre:</td>
           <td>{{$destinatario->nombre}}</td>
      </tr>
      <tr>
          <td>Cargo:<td>
          <td>{{$destinatario->cargo}}</td>
      </tr>
      <tr>
          <td>Dependencia:<td>
          <td>{{$destinatario->dependencia}}</td>
      </tr>
      <tr>
          <td>Dirección:<td>
          <td>{{$destinatario->direccion}}</td>
      </tr>
      <tr>
          <td>Correo electrónico:<td>
          <td>{{$destinatario->correo_electronico}}</td>
      </tr>
      </table>
<!--///////////////////////////////////////////////////////////////-->
<table class="highlight">
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
<table>
  <tr>
            <td><a href="{{ route('documentos.index') }}" class="waves-effect waves-light btn light-blue accent-3">Volver a la lista</a>
            </td>
            <td>
            {!! Form::open([
                'method' => 'DELETE',
                'route' => ['documentos.destroy', $documento->id]
            ]) !!}
                {!! Form::submit('Eliminar documento', ['class' => 'btn red darken-4']) !!}
            {!! Form::close() !!}
            </td>

            <td>
            <a href="{{url('/')}}" class="waves-effect waves-light btn blue-darken-3">Volver al inicio</a>
            </td>
</table>
@stop
