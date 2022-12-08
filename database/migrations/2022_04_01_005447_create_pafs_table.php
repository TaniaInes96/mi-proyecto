<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePafsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pafs', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_de_envio');
            $table->date('fecha_de_corte');
            $table->string('codigo_de_evento')->unique();
            $table->string('codigo_paf');
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
        Schema::dropIfExists('pafs');
    }
}
