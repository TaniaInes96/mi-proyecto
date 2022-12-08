<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentaContablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta__contables', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_de_envio');
            $table->date('fecha_de_corte');
            $table->string('codigo_de_evento')->unique();
            $table->string('cuenta_contable');
            $table->date('fecha_registro');
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
        Schema::dropIfExists('cuenta__contables');
    }
}
