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
        Schema::create('juridicas', function (Blueprint $table) {
            $table->string('nit',15);
            $table->string('razon_social',30);
            $table->timestamps();
            $table->unsignedBigInteger('id_tercero');

            $table->primary('nit');
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
        Schema::dropIfExists('juridicas');
    }
};
