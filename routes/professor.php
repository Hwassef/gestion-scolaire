<?php

use Illuminate\Support\Facades\Route;
Route::post('/login_as/professor', [\App\Http\Controllers\Professor\AuthController::class, 'login'])->name('professor.login');
Route::get('/professor/home', [\App\Http\Controllers\Professor\HomeController::class, 'index'])->name('professor.home');
Route::get('/professor/add_course', [App\Http\Controllers\Professor\AddCourseController::class, 'index'])->name('professor.ClassesList');
Route::get('/professor/add_course/{id}', [App\Http\Controllers\Professor\AddCourseController::class, 'displaySubjectsList'])->name('professor.displaySubjectsList');
Route::get('/professor/add_course/{id}/{subjectName}', [App\Http\Controllers\Professor\AddCourseController::class, 'displayAddCourse'])->name('professor.displayAddCourse');
Route::post('/professor/add_course/{id}/{subjectName}', [App\Http\Controllers\Professor\AddCourseController::class, 'addCourse'])->name('professor.addCourse');
Route::get('/professor/home', [\App\Http\Controllers\Professor\ConsultTimeScheduleController::class, 'displayTimeSchedule'])->name('professor.displayTimeSchedule');
