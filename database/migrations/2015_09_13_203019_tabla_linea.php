<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaLinea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',100);
            $table->string('descripcion');
            $table->integer('cupo');
            $table->integer('tutores')->unsigned();
            $table->integer('aspirantes')->unsigned();
            $table->integer('cat')->unsigned();

            $table->foreign('tutores')->references('id')->on('tutor');
            $table->foreign('aspirantes')->references('id')->on('aspirante');
            $table->foreign('cat')->references('id')->on('categoria');
            $table->timestamps();

            //2015_09_13_035712

            //2015_09_13_203019
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('linea');
    }
}
