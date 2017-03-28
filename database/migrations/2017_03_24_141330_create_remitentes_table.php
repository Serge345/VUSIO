<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemitentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remitentes', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombre');
            $table->integer('numero_identificacion');
            $table->String('ciudad');
            $table->String('departamento');
            $table->String('direccion');
            $table->String('correo_electronico')->unique();
            $table->enum('tipo',['Persona natural','Entidad'])->default('Persona natural');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remitentes');
    }
}
