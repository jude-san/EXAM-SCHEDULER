<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extables', function (Blueprint $table) {
            $table->integer('extables_id');
            $table->string('date');
            $table->integer('session');
            $table->string('sgroup');
            $table->string('progid');
            $table->integer('class_size');
            $table->date('insertion_date');
            $table->integer('time_id');
            $table->integer('course_id');
            $table->integer('room_id');
            $table->timestamps();

           /** $table->foreign('time_id')
         *       ->references('id')
          *      ->on('times');

          *  $table->foreign('course_id')
           *     ->references('id')
           *     ->on('courses');
*
           * $table->foreign('room_id')
            *    ->references('id')
            *    ->on('rooms');
                 */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extables');
    }
}
