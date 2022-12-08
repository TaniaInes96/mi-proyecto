<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCanalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canales', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_de_envio');
            $table->date('fecha_de_corte');
            $table->string('codigo_de_evento')->unique();
            $table->bigInteger('id_canal')->unsigned();
            $table->foreign('id_canal')->references('id')->on('lista4s')->onDelete('cascade');
            $table->string('tipo_envio')->nullable();
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
        Schema::dropIfExists('canales');
    }
}
