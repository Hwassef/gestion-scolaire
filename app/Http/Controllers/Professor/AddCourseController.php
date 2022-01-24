<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class AddCourseController extends Controller
{
    public function index()
    {
        $counter = 0;
        $classesFromSubjects = Subject::where('professor_id', Auth::guard('professor')->user()->id)->get()->unique('class_name');
        return view('professor.add_course_classes_list', compact('classesFromSubjects', 'counter'));
    }

    public function displaySubjectsList($id)
    {
        $counter = 0;
        $subjects = Subject::where('professor_id', Auth::guard('professor')->user()->id)->where('class_id', request()->route('id'))->get();
        return view('professor.add_course_subjects_list', compact('subjects', 'counter'));
    }

    public function displayAddCourse($id, $subjectName)
    {
        $courses = Course::all();
        $counter = 0;
        return view('professor.add_course', compact('courses', 'counter'));
    }

    public function addCourse($id, $subjectName)
    {
        $file = Request()->file('course_file');
        $filename = $file->getClientOriginalName();
        $file->storeAs('public/', $filename);
        $subject = Subject::where('subject_name', $subjectName)->where('class_id', $id)->first();
        $course  = new Course();
        $course->professor_id = Auth::guard('professor')->user()->id;
        $course->class_id     = $id;
        $course->subject_id   = $subject->id;
        $course->course_name  =  Request()->course_name;
        $course->course_file  = $filename;
        $course->save();
        notify()->success('You Have Added A New Course !');
        return Redirect::back();
    }
}
