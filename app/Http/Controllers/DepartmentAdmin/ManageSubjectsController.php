<?php

namespace App\Http\Controllers\DepartmentAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classe;
use App\Models\Professor;
use App\Models\Subject;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Schema;
class ManageSubjectsController extends Controller
{
    public function index()
    {
        $counter = 0;
        $classes = Classe::all();
        $professors = Professor::all();
        $subjects = Subject::all();
        return view('departmentadmin.manage_subjects_list', compact('classes', 'professors', 'subjects', 'counter'));
    }

    public function store(Request $request)
    {
        $professor = explode(':', $request->professor);
        $profStr = $professor[0];
        $profId  = $professor[1];
        $class = explode(':', $request->classe);
        $classStr = $class[0];
        $classId  = $class[1];
        $subject = new Subject();
        $subject->subject_name = $request->subject_name;
        $subject->class_name = $classStr;
        $subject->class_id = $classId;
        $subject->professor_name = $profStr;
        $subject->professor_id = $profId;
        $subject->save();
        $class = explode(':', $request->classe);
        $classStr = $class[0];
        $classId  = $class[1];
        $subjectName = $request->subject_name;
        $cleanSubjectName = str_replace(" ", "_", $subjectName);
        $cleanClassName = str_replace(".", "_", $classStr);
        $finalSubjectNotesTable = $cleanSubjectName."_".$cleanClassName."_codes";

        Schema::connection('mysql')->create($finalSubjectNotesTable, function ($table) {
            $table->increments('id');

            $table->bigInteger('subject_id')->unsigned()->index()->nullable();
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');

            $table->bigInteger('professor_id')->unsigned()->index()->nullable();
            $table->foreign('professor_id')->references('id')->on('professors')->onDelete('cascade');

            $table->bigInteger('student_id')->unsigned()->index()->nullable();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');

            $table->string('code');
            $table->timestamps();
        });
        notify()->success('A New Professor Has Been Added !');
        return Redirect::back();
    }
}
