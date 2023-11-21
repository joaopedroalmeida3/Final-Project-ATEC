<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryInstructorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_instructor', function (Blueprint $table) {
        
        $table->integer('instructor_id')
            ->unsigned();
        $table->foreign('instructor_id')
            ->references('id')
            ->on('instructors');

        $table->integer('category_id')
            ->unsigned();
        $table->foreign('category_id')
            ->references('id')
            ->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_instructor');
    }
}
