<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    //

    protected $fillable=[
      'numero_radicado','nombre','descripcion','fecha_entrada','tipo',
      'estado','ubicacion','remitente','destinatario'
    ];

}
