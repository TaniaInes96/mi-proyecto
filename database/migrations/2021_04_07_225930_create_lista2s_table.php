<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLista2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista2s', function (Blueprint $table) {
            $table->id();
            $table->string('cod')->unique();
            $table->string('tipo_evento');
            $table->string('subtipo_evento');
            $table->string('clase_evento');
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
        Schema::dropIfExists('lista2s');
    }
}
