<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->integer('id');
           /* $table->varchar(course_code);
            $table->varchar(name);
            $table->int(dept_id);
            $table->int(student_id);
            $table->int(class_size);
            $table->timestamps();
            */
            $table->string('class_size');
            $table->string('code');
            $table->string('name');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
