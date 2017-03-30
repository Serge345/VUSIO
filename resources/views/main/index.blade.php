@extends('layouts.master')

@section('content')
<h1>Bienvenidos</h1>
<table class = "striped">
      <thead>
              <th colspan="4">
                <p class = "flow-text"> Seleccione una opción </p>
              </th>
      </thead>
      <tbody>
              <tr>
                  <td>
                        <a href="{{ url('/documentos') }}" class="btn btn-info">Ver documentos</a>
                  </td>
                  <td>
                        <a href="{{ url('/remitentes') }}" class="btn btn-info">Ver remitentes</a>
                  </td>

                  <td>
                        <a href="{{ url('/destinatarios') }}" class="btn btn-info">Ver destinatarios</a>
                  </td>
              </tr>
      </tbody>
</table>


@stop
