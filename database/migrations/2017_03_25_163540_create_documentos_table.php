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
            $table->integer('tipo')->unsigned();
            $table->integer('remitente')->unsigned();
            $table->integer('destinatario')->unsigned();
            $table->date('fecha_entrada');
            $table->timestamps();
            $table->foreign('tipo')->references('id')->on('tipo_documento')->onDelete('cascade');
            $table->foreign('remitente')->references('id')->on('remitentes')->onDelete('cascade');
            $table->foreign('destinatario')->references('id')->on('destinatarios')->onDelete('cascade');
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
