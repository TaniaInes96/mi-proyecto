<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLista7sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista7s', function (Blueprint $table) {
            $table->id();
            $table->string('cod')->unique();
            $table->text('departamento')->nullable();
            $table->text('provincia')->nullable();
            $table->text('municipio')->nullable();
            $table->text('ciudad')->nullable();
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
        Schema::dropIfExists('lista7s');
    }
}
