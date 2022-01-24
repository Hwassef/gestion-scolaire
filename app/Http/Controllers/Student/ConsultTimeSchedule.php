<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\ClasseTimeSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ConsultTimeSchedule extends Controller
{
    public function displayTimeSchedule()
    {
        $className = Auth::guard('student')->user()->classe;
        $classe = Classe::where('class_name', $className)->first();
        $timeSchedule = ClasseTimeSchedule::where('class_id', $classe -> id)->first();
        $timeScheduleFileName = $timeSchedule-> file_name;
        return view ('student.home', compact('timeScheduleFileName'));
    }
}
