@extends('layouts.master')

@section('content')

<h1 style="color:#1780BD">destinatarios en el sistema:</h1>
<p class="lead"><a href="{{url('destinatarios/create')}}">Agregar uno nuevo</a></p>
<hr>



<p>
  @foreach($destinatarios as $destinatario)

<h3 >{{ $destinatario->nombre }}</h3>
<p >{{ $destinatario->cargo}}</p>
<p >{{ $destinatario->dependencia}}</p>

<p>
    <a href="{{ route('destinatarios.show', $destinatario->id) }}" class="btn btn-info">Ver destinatario</a>
    <a href="{{ route('destinatarios.edit', $destinatario->id) }}" class="btn btn-primary">Editar destinatario</a>
</p>

@endforeach

    <a href="{{ url('/') }}" class="btn btn-info">Volver al inicio</a>

</p>
<hr>


@stop
