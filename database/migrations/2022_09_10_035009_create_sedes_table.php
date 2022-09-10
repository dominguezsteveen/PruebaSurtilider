<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sedes', function (Blueprint $table) {
            $table->integerIncrements('id_sede');
            $table->string('nombre_sede',30);
            $table->string('telefono',20);
            $table->string('direccion',50);
            $table->boolean('estado');
            $table->timestamps();
            $table->unsignedBigInteger('id_tercero');

            $table->foreign('id_tercero')->references('id_tercero')->on('terceros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sedes');
    }
};
