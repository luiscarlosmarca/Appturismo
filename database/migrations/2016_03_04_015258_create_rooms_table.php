<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');//de pareja, dos camas, sencilla
            $table->integer('numPerson');
            $table->integer('numBed');

            $table->integer('cantidad');//cantidad de habitaciones
            $table->integer('price');
            $table->text('extra');//check list para agregar 
            $table->string('image')->nullable();

            $table->integer('hotel_id')->unsigned();
            $table->foreign('hotel_id')->references('id')->on('hotels');

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
        Schema::drop('rooms');
    }
}
