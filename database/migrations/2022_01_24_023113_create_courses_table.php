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
            $table->id();

            $table->bigInteger('professor_id')->unsigned()->index()->nullable();
            $table->foreign('professor_id')->references('id')->on('professors')->onDelete('cascade');

            $table->bigInteger('class_id')->unsigned()->index()->nullable();
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');

            $table->bigInteger('subject_id')->unsigned()->index()->nullable();
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');

            $table->string('course_name');
            $table->string('course_file');
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
        Schema::dropIfExists('courses');
    }
}
