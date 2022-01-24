<?php

use Illuminate\Support\Facades\Route;
Route::post('/login_as/student', [\App\Http\Controllers\Student\AuthController::class, 'login'])->name('student.login');
Route::get('/student/home', [\App\Http\Controllers\Student\HomeController::class, 'index'])->name('student.home');
Route::get('/student/home', [\App\Http\Controllers\Student\ConsultTimeSchedule::class, 'displayTimeSchedule'])->name('student.displayTimeSchedule');
Route::get('/student/subjects', [\App\Http\Controllers\Student\ConsultSubjectCourse::class, 'displaySubjectsList'])->name('student.displaySubjectsList');
Route::get('/student/subjects/{id}', [\App\Http\Controllers\Student\ConsultSubjectCourse::class, 'subjectCourse'])->name('student.subjectCourse');
Route::get('/student/notes/subjects', [\App\Http\Controllers\Student\ConsultNotesController::class, 'displaySubjectsList'])->name('student.displaySubjectsListForNotes');
Route::get('/student/notes/subjects/{id}', [\App\Http\Controllers\Student\ConsultNotesController::class, 'subjectNote'])->name('student.subjectNote');
