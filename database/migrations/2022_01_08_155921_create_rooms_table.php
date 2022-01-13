<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('rooms_id');
            $table->string('room_name');
            $table->integer('room_type');
            $table->integer('blocks_id');
            $table->integer('exam_capacity');
            $table->integer('lecture_capacity');
            $table->integer('covid_capacity');
            $table->timestamps();

            //$table->foreign('blocks_id')
              //  ->references('id')
                //->on('blocks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
