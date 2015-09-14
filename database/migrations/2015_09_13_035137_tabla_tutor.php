<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaTutor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('cedula',9);
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->string('direccion',150);
            $table->string('telefono',11);
            $table->char('sexo',1);



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
        Schema::drop('tutor');
    }
}
