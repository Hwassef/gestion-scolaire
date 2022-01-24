<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ConsultNotesController extends Controller
{
    public function displaySubjectsList()
    {
        $counter = 0;
        $subjects = Subject::where('class_name', Auth::guard('student')->user()->classe)->get();
        return view('student.notes_subject_list', compact('subjects', 'counter'));
    }

    public function subjectNote($id)
    {
        $subjectName = Subject::where('id', $id)->first();
        $clenSubjectName    = str_replace(" ", "_", $subjectName->subject_name);
        $cleanClassName     = str_replace(".", "_", Auth::guard('student')->user()->classe);
        $finalSubjectNotesTableName = $clenSubjectName."_".$cleanClassName."_notes";
        $note = DB::table($finalSubjectNotesTableName)->where('student_id', Auth::guard('student')->user()->id)->first();
        return view('student.subject_note', compact('note'));
    }
}
