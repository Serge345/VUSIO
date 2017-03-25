<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destinatario extends Model
{
    //
    protected $fillable=[
      'numero_identificacion','nombre','direccion','cargo','dependencia',
      'correo_electronico'
    ];
}
