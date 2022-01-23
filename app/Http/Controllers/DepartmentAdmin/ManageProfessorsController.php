<?php

namespace App\Http\Controllers\DepartmentAdmin;

use App\Http\Controllers\Controller;
use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class ManageProfessorsController extends Controller
{
    public function store(Request $request)
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $pass = implode($pass);
        $professor = new Professor();
        $professor -> full_name = $request -> full_name;
        $professor -> email = $request -> email;
        $professor -> password = $pass;
        // $departmentAdmin -> password = Hash::make(($request->password));
        $professor -> save();
        notify()->success('A New Professor Has Been Added !');
        return Redirect::back();
    }
}
