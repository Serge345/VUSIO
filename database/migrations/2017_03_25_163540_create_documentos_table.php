<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('documentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_radicado');
            $table->String('nombre');
            $table->String('descripcion');
            $table->String('fecha_entrada');
            $table->integer('tipo')->unsigned();
            $table->String('correo_electronico')->unique();
            $table->timestamps();
            $table->foreing('tipo')->references('id')->on('tipo_documento')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('documentos');
    }
}
