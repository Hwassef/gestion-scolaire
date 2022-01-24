<?php

use Illuminate\Support\Facades\Route;
Route::view('/department_admin/home', 'DepartmentAdmin.home')->name('departmentadmin.home');
Route::post('login_as/department_admin', [\App\Http\Controllers\DepartmentAdmin\AuthController::class, 'login'])->name('departmentadmin.login');
Route::get('/department_admin/manage_classes_list', [App\Http\Controllers\DepartmentAdmin\ManageClassesController::class, 'index'])->name('departmentadmin.manageClassesList');
Route::view('/department_admin/manage_professors_list', 'DepartmentAdmin.manage_professors_list')->name('departmentadmin.manageProfessorsList');
Route::get('department_admin/manage_subjects_list', [\App\Http\Controllers\DepartmentAdmin\ManageSubjectsController::class, 'index'])->name('departmentadmin.manageSubjectsList');
Route::post('department_admin/manage_subjects_list', [\App\Http\Controllers\DepartmentAdmin\ManageSubjectsController::class, 'store'])->name('departmentadmin.addSubject');
Route::post('/department_admin/manage_classes_list/add', [App\Http\Controllers\DepartmentAdmin\ManageClassesController::class, 'store'])->name('departmentadmin.addClasse');
Route::post('/department_admin/manage_professors_list/add', [App\Http\Controllers\DepartmentAdmin\ManageProfessorsController::class, 'store'])->name('departmentadmin.addProfessor');
Route::get('/department_admin/classes_list', [App\Http\Controllers\DepartmentAdmin\MnageNotesForEachClass::class, 'index'])->name('departmentadmin.displayClassesList');
Route::get('/department_admin/classes_list/{id}', [App\Http\Controllers\DepartmentAdmin\MnageNotesForEachClass::class, 'displaySubjectsListForClass'])->name('departmentadmin.displaySubjectsListForClass');
Route::get('/department_admin/classes_list/{id}/{subjectName}', [App\Http\Controllers\DepartmentAdmin\MnageNotesForEachClass::class, 'displayAddNotes'])->name('departmentadmin.displayAddNotes');
Route::post('/department_admin/classes_list/{id}/{subjectName}', [App\Http\Controllers\DepartmentAdmin\MnageNotesForEachClass::class, 'submitNotes'])->name('departmentadmin.submitNotes');
Route::post('/department_admin/classes_list/{id}/{subjectName}/generate', [App\Http\Controllers\DepartmentAdmin\MnageNotesForEachClass::class, 'generateCode'])->name('departmentadmin.generateCode');
Route::get('/department_admin/add_student', [App\Http\Controllers\DepartmentAdmin\ManageStudentsController::class, 'index'])->name('departmentadmin.addStudents');
Route::post('/department_admin/add_student', [App\Http\Controllers\DepartmentAdmin\ManageStudentsController::class, 'addStudent'])->name('departmentadmin.addStudent');
Route::get('/department_admin/add_time_schedule', [App\Http\Controllers\DepartmentAdmin\TimeScheduleController::class, 'index'])->name('departmentadmin.displayAddTimeSchedule');
Route::get('/department_admin/add_time_schedule/{id}', [App\Http\Controllers\DepartmentAdmin\TimeScheduleController::class, 'displayAddSchedule'])->name('departmentadmin.displayAddSchedule');
Route::post('/department_admin/add_time_schedule/{id}', [App\Http\Controllers\DepartmentAdmin\TimeScheduleController::class, 'addTimeSchedule'])->name('departmentadmin.addTimeSchedule');
Route::get('/department_admin/upload_time_schedule', [App\Http\Controllers\DepartmentAdmin\UploadTimeScheduleController::class, 'chooseType'])->name('departmentadmin.chooseType');
Route::get('/department_admin/upload_time_schedule/professors_list', [App\Http\Controllers\DepartmentAdmin\UploadTimeScheduleController::class, 'professorsList'])->name('departmentadmin.professorsList');
Route::get('/department_admin/upload_time_schedule/professors_list/{id}', [App\Http\Controllers\DepartmentAdmin\UploadTimeScheduleController::class, 'displayAddProfessorTimeSchedule'])->name('departmentadmin.displayAddProfessorTimeSchedule');
Route::post('/department_admin/upload_time_schedule/professors_list/{id}', [App\Http\Controllers\DepartmentAdmin\UploadTimeScheduleController::class, 'addProfessorTimeSchedule'])->name('departmentadmin.addProfessorTimeSchedule');
Route::get('/department_admin/upload_time_schedule/classes_list', [App\Http\Controllers\DepartmentAdmin\UploadTimeScheduleController::class, 'classesList'])->name('departmentadmin.classesList');
Route::get('/department_admin/upload_time_schedule/classes_list/{id}', [App\Http\Controllers\DepartmentAdmin\UploadTimeScheduleController::class, 'displayAddClasseTimeSchedule'])->name('departmentadmin.displayAddClasseTimeSchedule');
Route::post('/department_admin/upload_time_schedule/classes_list/{id}', [App\Http\Controllers\DepartmentAdmin\UploadTimeScheduleController::class, 'addClassTimeSchedule'])->name('departmentadmin.addClassTimeSchedule');
