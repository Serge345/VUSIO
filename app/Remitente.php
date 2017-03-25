<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remitente extends Model
{
    //
    protected $fillable=[
      'numero_identificacion','nombre','direccion','correo_electronico','tipo'
    ];
}
