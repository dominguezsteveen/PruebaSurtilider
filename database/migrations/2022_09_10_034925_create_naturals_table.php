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
        Schema::create('naturals', function (Blueprint $table) {
            $table->integer('numero_id');
            $table->string('tipo_id',2);
            $table->string('nombre',20);
            $table->string('apellido',30);
            $table->timestamps();
            $table->unsignedBigInteger('id_tercero');

            $table->primary('numero_id');
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
        Schema::dropIfExists('naturals');
    }
};
