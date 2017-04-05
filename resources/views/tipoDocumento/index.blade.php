@extends('layouts.master')

@section('content')

<h1 style="color:#1780BD">Listado de categorias en el sistema:</h1>
<p class="lead"> <a href="{{url('tipos/create')}}">Agregar una nueva categoria</a></p>
<hr>


<table>
  <thead>
    <th> Nombre de categoria </th>
    <th> Días retención </th>
  </thead>
  <tbody>


    @foreach($tipo_documentos as $tipo_documento)
          <tr>
          <td><p class="flow-text" >{{ $tipo_documento->nombre }}</p></td>
          <td><p class="flow-text" >{{ $tipo_documento->tiempo_respuesta}}</p></td>
          <td><a href="{{ route('tipos.show', $tipo_documento->id) }}" class="btn btn-info">Detalles</a></td>
          <td><a href="{{ route('tipos.edit', $tipo_documento->id) }}" class="btn btn-primary">Modificar categoria</a></td>
          </tr>
    @endforeach
</table>
    <a href="{{ url('/') }}" class="btn btn-info">Volver al inicio</a>

</p>
<hr>


@stop
