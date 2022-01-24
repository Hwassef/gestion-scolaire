<?php

namespace App\Http\Controllers\DepartmentAdmin;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
class ManageStudentsController extends Controller
{
    public function index()
    {
        $counter = 0;
        $classes = Classe::all();
        $students = Student::all();
        return view('departmentadmin.add_student', compact('students', 'classes', 'counter'));
    }

    public function addStudent(Request $request)
    {

        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $pass = implode($pass);

        $student = new Student();
        $student->full_name = $request->full_name;
        $student->email = $request->email;
        $student->department = $request->department;
        $student->classe = $request->classe;
        $student->password =  Hash::make(($pass));
        $student -> bla = $pass;
        $student->save();

        notify()->success('A New Student Has Been Added !');
        return Redirect::back();
    }
}
