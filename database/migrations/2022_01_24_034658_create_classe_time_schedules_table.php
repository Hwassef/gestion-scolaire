<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasseTimeSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classe_time_schedules', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('class_id')->unsigned()->index()->nullable();
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->string('file_name');
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
        Schema::dropIfExists('classe_time_schedules');
    }
}
