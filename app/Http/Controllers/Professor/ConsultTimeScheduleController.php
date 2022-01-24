<?php

namespace App\Http\Controllers\professor;

use App\Http\Controllers\Controller;
use App\Models\ProfessorTimeSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ConsultTimeScheduleController extends Controller
{
    public function displayTimeSchedule()
    {
        $timeSchedule = ProfessorTimeSchedule::where('professor_id', Auth::guard('professor')->user()->id)->first();
        $timeScheduleFileName = $timeSchedule-> file_name;
        return view ('professor.home', compact('timeScheduleFileName'));
    }
}
