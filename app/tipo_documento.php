<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_documento extends Model
{
    //
    protected $fillable=[
      'nombre','descripcion','tiempo_respuesta'
    ];
}
