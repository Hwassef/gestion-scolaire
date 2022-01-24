<?php

namespace App\Http\Controllers\DepartmentAdmin;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Redirect;
use App\Models\Student;

class MnageNotesForEachClass extends Controller
{
    public function index()
    {
        $counter = 0;
        $classes = Classe::all();
        return view('departmentadmin.classes_list_notes', compact('classes', 'counter'));
    }

    public function displaySubjectsListForClass($id)
    {
        $subjects = Subject::where('class_id', $id)->get();
        $counter  = 0;
        return view('departmentadmin.subjects_list', compact('subjects', 'counter'));
    }

    public function displayAddNotes($id, $subjectName)
    {
        $classe = Classe::where('id', $id)->first();
        $cleanClassName = str_replace(".", "_", $classe->class_name);
        $finalCodeTableName = $cleanClassName . "_students_codes";
        $studentCodes = DB::table($finalCodeTableName)->get();
        return view('departmentadmin.add_notes', compact('studentCodes'));
    }

    public function generateCode($id, $subjectName)
    {

        $class = Classe::where('id', $id)->first();
        $className = $class -> class_name;
        $cleanClassName = str_replace(".", "_", $className);
        $finalCodesTableName = $cleanClassName . "_students_codes";
        $students = Student::where('classe', $className)->get();
        foreach ($students as $student) {
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $alphaLength = strlen($alphabet) - 1;

            $code = array();

            for ($i = 0; $i < 3; $i++) {
                $n = rand(0, $alphaLength);
                $code[] = $alphabet[$n];
            }
            $code = implode($code);
            DB::table($finalCodesTableName)->insert(
                array(
                    'student_id'   =>   $student->id,
                    'code'   =>   $code,
                )
            );

        }
        notify()->success('Codes Have Been Generated Succesfully !');
        return Redirect::back();
    }



    public function submitNotes($id, $subjectName)
    {
        $classe = Classe::where('id', $id)->first();
        $subject = Subject::where('subject_name', $subjectName)->where('class_id', $id)->first();
        $cleanClassName = str_replace(".", "_", $classe->class_name);
        $cleanSubjectName = str_replace(" ", "_", $subjectName);
        $finalNotesTableName = $cleanSubjectName . "_" . $cleanClassName . "_notes";
        Schema::connection('mysql')->create($finalNotesTableName, function ($table) {
            $table->increments('id');

            $table->bigInteger('class_id')->unsigned()->index()->nullable();
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');

            $table->bigInteger('subject_id')->unsigned()->index()->nullable();
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');

            $table->bigInteger('student_id')->unsigned()->index()->nullable();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');

            $table->string('class_name');
            $table->string('subject_name');
            $table->string('student_name');
            $table->string('note');
            $table->timestamps();
        });

        for ($i = 0; $i<count(Request()->note);$i++)
        {
            $student = Student::where('id', Request() -> studentId[$i])->first();
            DB::table($finalNotesTableName)->insert(
                array(
                    'class_id'        =>   $id,
                    'subject_id'      =>   $subject  -> id,
                    'student_id'      =>   Request() -> studentId[$i],
                    'class_name'      =>   $classe   -> class_name,
                    'subject_name'    =>   $subjectName,
                    'student_name'    =>   $student  -> full_name,
                    'note'            =>   Request() -> note[$i],
                )
            );
        }
        notify()->success('Notes Added Succesfully !');
        return Redirect::back();
    }
}
