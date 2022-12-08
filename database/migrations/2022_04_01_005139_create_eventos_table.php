<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_de_envio');
            $table->date('fecha_de_corte');
            $table->string('codigo_de_evento')->unique();
            $table->bigInteger('id_tipo_de_entrada')->unsigned();
            $table->foreign('id_tipo_de_entrada')->references('id')->on('lista1s')->onDelete('cascade');
            $table->text('descripcion');
            $table->bigInteger('id_factor_de_riesgo')->unsigned();
            $table->foreign('id_factor_de_riesgo')->references('id')->on('lista3s')->onDelete('cascade');
            $table->string('cargos')->nullable();
            $table->string('areas')->nullable();
            $table->bigInteger('id_categoria')->unsigned()->nullable();
            $table->foreign('id_categoria')->references('id')->on('lista8s')->onDelete('cascade');
            $table->float('perdida_valor_contable')->nullable();
            $table->float('perdida_valor_mercado')->nullable();
            $table->float('gastos')->nullable();
            $table->float('monto_total')->nullable();
            $table->float('monto_recuperado')->nullable();
            $table->string('recuperacion_activo')->nullable();
            $table->string('relacion_riesgo')->nullable();
            $table->string('evento_critico');
            $table->text('detalle_evento_critico')->nullable();
            $table->string('monto_evento')->nullable();
            $table->string('moneda')->nullable();
            $table->date('fecha_descubrimiento');
            $table->string('hora_descubrimiento');
            $table->date('fecha_inicio')->nullable();
            $table->string('hora_inicio')->nullable();
            $table->date('fecha_final')->nullable();
            $table->string('hora_final')->nullable();
            $table->text('elaborador');
            $table->text('revisor')->nullable();
            $table->text('aprobador');
            $table->bigInteger('id_estado_evento')->unsigned()->nullable();
            $table->foreign('id_estado_evento')->references('id')->on('lista11s')->onDelete('cascade');
            $table->text('detalle_estado_evento')->nullable();
            $table->string('codigo_de_evento_relacionado')->nullable();
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
        Schema::dropIfExists('eventos');
    }
}
