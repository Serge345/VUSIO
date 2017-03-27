<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remitente extends Model
{
    //
    protected $fillable=[
      'numero_identificacion','nombre','ciudad','departamento',
      'direccion','correo_electronico','tipo'
    ];
}
