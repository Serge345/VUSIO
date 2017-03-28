@extends('layouts.master')

@section('content')

<h1 style="color:#1780BD">Listado de documentos en el sistema:</h1>
<p class="lead"> <a href="{{url('documentos/create')}}">Agregar un nuevo documento</a></p>
<hr>


<table>
  <thead>
    <th> Nombre documento </th>
    <th> Número radicado </th>
    <th> Descripción del documento </th>
  </thead>
  <tbody>


    @foreach($documentos as $documento)
          <tr>
          <td><p class="flow-text" >{{ $documento->nombre }}</p></td>
          <td><p class="flow-text" >{{ $documento->numero_radicado}}</p></td>
          <td><p class="flow-text" >{{ $documento->descripcion }}</p></td>
          <td><a href="{{ route('documentos.show', $documento->id) }}" class="btn btn-info">Ver informacion del documento</a></td>
          <td><a href="{{ route('documentos.edit', $documento->id) }}" class="btn btn-primary">Actualizar informacion del documento</a></td>
          </tr>
    @endforeach
</table>
    <a href="{{ url('/') }}" class="btn btn-info">Volver al inicio</a>

</p>
<hr>


@stop
