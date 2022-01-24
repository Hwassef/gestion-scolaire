<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfessorIdToProfessorTimeSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('professor_time_schedules', function (Blueprint $table) {
            $table->bigInteger('professor_id')->unsigned()->index()->nullable();
            $table->foreign('professor_id')->references('id')->on('professors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('professor_time_schedules', function (Blueprint $table) {
            $table->dropColumn('professor_id');
        });
    }
}
