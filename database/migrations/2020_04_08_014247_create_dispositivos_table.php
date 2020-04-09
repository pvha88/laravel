<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispositivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispositivos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('dispositivo');
            $table->string('servicios');
            $table->string('unidad');
            $table->string('tipo');
            $table->string('marca');
            $table->string('modelo');
            $table->string('ip');
            $table->date('fecha');
            $table->string('garantia');
            $table->string('usuario');
            $table->string('clave');
            $table->string('observacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dispositivos');
    }
}
