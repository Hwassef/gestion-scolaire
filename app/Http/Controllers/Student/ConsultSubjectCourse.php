<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ConsultSubjectCourse extends Controller
{
    public function displaySubjectsList()
    {
        $counter = 0;
        $subjects = Subject::where('class_name', Auth::guard('student')->user()->classe)->get();
        return view('student.subjects_list', compact('subjects', 'counter'));
    }
    public function subjectCourse($id)
    {
        $counter = 0;
        $courses = Course::where('subject_id', request()->route('id'))->get();
        return view('student.subject_course', compact('courses', 'counter'));
    }
}
