<?php

namespace App\Http\Controllers\DepartmentAdmin;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\Professor;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class TimeScheduleController extends Controller
{
    public function index()
    {
        $counter = 0;
        $classes = Classe::all();
        return view('departmentadmin.time_schedule_classes_list', compact('classes', 'counter'));
    }

    public function displayAddSchedule($id)
    {
        $subjects = Subject::where('class_id', $id)->get();
        return view('departmentadmin.add_schedule', compact('subjects'));
    }

    public function addTimeSchedule($id)
    {
        $class = Classe::where('id', $id)->first();
        $className = $class->class_name;
        $cleanClassName = str_replace(".", "_", $className);
        $finalTimeScheduleTableName = $cleanClassName . "_time_schedule";
        Schema::connection('mysql')->create($finalTimeScheduleTableName, function ($table) {
            $table->increments('id');

            $table->bigInteger('class_id')->unsigned()->index()->nullable();
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');

            $table->bigInteger('subject_id')->unsigned()->index()->nullable();
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');

            $table->bigInteger('professor_id')->unsigned()->index()->nullable();
            $table->foreign('professor_id')->references('id')->on('professors')->onDelete('cascade');

            $table->string('class_name');
            $table->string('professor_name');
            $table->string('subject_name');
            $table->string('monday')->nullable();
            $table->string('tuesday')->nullable();
            $table->string('wednesday')->nullable();
            $table->string('thursday')->nullable();
            $table->string('friday')->nullable();
            $table->string('saturday')->nullable();
            $table->timestamps();
        });
        for ($i = 0; $i < count(Request()->subjectsId); $i++) {
            $professor = Professor::where('id', Request()->professorsId[$i])->first();
            $subject = Subject::where('id', Request()->subjectsId[$i])->first();
            DB::table($finalTimeScheduleTableName)->insert(
                array(
                    'class_id'          =>   $id,
                    'subject_id'        =>   Request()->subjectsId[$i],
                    'professor_id'      =>   Request()->professorsId[$i],
                    'class_name'        =>   $className,
                    'professor_name'    =>   $professor->full_name,
                    'subject_name'      =>   $subject->subject_name,
                    Request()->day[$i]  =>   Request()->session[$i],
                )
            );
        }
        notify()->success('Time Schedule Has Been Added Succesfully !');
        return Redirect::back();
    }
}
