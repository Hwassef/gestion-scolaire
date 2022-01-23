<?php

namespace App\Http\Controllers\DepartmentAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classe;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Schema;
class ManageClassesController extends Controller
{
    public function index()
    {
        $counter = 0;
        $classes = Classe::all();
        return view('DepartmentAdmin.manage_classes_list', compact('classes', 'counter'));
    }

    public function store(Request $request)
    {
        $classe = new Classe();
        $classe->class_name = $request->class_name;
        $classe->level      = $request->level;
        $classe->save();
        $className = $request -> class_name;
        $cleanClassName = str_replace(".", "_", $className);
        $finlClassName = $cleanClassName."_students_codes";
        Schema::connection('mysql')->create($finlClassName, function ($table) {
            $table->increments('id');
            $table->bigInteger('student_id')->unsigned()->index()->nullable();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->string('code');
            $table->timestamps();
        });
        notify()->success('A New Class Has Been Added !');
        return Redirect::back();

    }

}
