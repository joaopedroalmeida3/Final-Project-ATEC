<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('instructor_id')
                ->unsigned();
            $table->foreign('instructor_id')
                ->references('id')
                ->on('instructors');
            $table->integer('vehicle_id')
                ->unsigned();
            $table->foreign('vehicle_id')
                ->references('id')
                ->on('vehicles');
            $table->integer('category_student_id')
                ->unsigned();
            $table->foreign('category_student_id')
                ->references('id')
                ->on('category_student');
            $table->boolean('state');
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
        Schema::dropIfExists('lessons');
    }
}
