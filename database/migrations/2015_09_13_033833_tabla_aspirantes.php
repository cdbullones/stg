<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaAspirantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspirante', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('cedula',9);
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->string('direccion',150);
            $table->string('telefono',11);
            $table->date('f_nacimiento');
            $table->char('Sexo',1);
            $table->string('profesion',150);
            $table->integer('uni')->unsigned();

           // $table->primary('email');
            $table->foreign('uni')->references('id')->on('universidad');
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
        Schema::drop('aspirante');
    }
}
