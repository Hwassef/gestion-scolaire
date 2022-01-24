<?php

namespace App\Http\Controllers\DepartmentAdmin;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\ClasseTimeSchedule;
use App\Models\Professor;
use App\Models\ProfessorTimeSchedule;
use Illuminate\Http\Request;
use SebastianBergmann\LinesOfCode\Counter;
use Illuminate\Support\Facades\Redirect;
class UploadTimeScheduleController extends Controller
{
    public function chooseType()
    {
        return view('departmentadmin.choose_type_upload_time_schedule');
    }
    public function professorsList()
    {
        $professors = Professor::all()->unique('full_name');
        $counter = 0;
        return view('departmentadmin.professors_list_upload_time_schedule', compact('professors', 'counter'));
    }
    public function displayAddProfessorTimeSchedule($id)
    {
        return view ('departmentadmin.professor_add_time_schedule');
    }
    public function addProfessorTimeSchedule($id)
    {
        $file = Request()->file('time_schedule');
        $filename = $file->getClientOriginalName();
        $file->storeAs('public/', $filename);
        $professorTimeSchedule = new ProfessorTimeSchedule();
        $professorTimeSchedule -> professor_id = $id;
        $professorTimeSchedule -> file_name = $filename;
        $professorTimeSchedule -> save();
        notify()->success('Time Schedule Has Been Added !');
        return Redirect::back();
    }

    public function classesList()
    {
        $counter = 0;
        $classes = Classe::all();
        return view ('departmentadmin.classes_list_upload_time_schedule', compact('classes', 'counter'));
    }

    public function displayAddClasseTimeSchedule($id)
    {
        return view ('departmentadmin.class_add_time_schedule');
    }

    public function addClassTimeSchedule($id)
    {
        $file = Request()->file('time_schedule');
        $filename = $file->getClientOriginalName();
        $file->storeAs('public/', $filename);
        $classTimeSchedule = new ClasseTimeSchedule();
        $classTimeSchedule -> class_id = $id;
        $classTimeSchedule -> file_name = $filename;
        $classTimeSchedule -> save();
        notify()->success('Time Schedule Has Been Added !');
        return Redirect::back();
    }
}
