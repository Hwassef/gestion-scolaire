<?php

use Illuminate\Support\Facades\Route;
Route::view('/department_admin/home', 'DepartmentAdmin.home')->name('departmentadmin.home');
Route::post('login_as/department_admin', [\App\Http\Controllers\DepartmentAdmin\AuthController::class, 'login'])->name('departmentadmin.login');
Route::view('/department_admin/manage_classes_list', 'DepartmentAdmin.manage_classes_list')->name('departmentadmin.manageClassesList');
Route::view('/department_admin/manage_professors_list', 'DepartmentAdmin.manage_professors_list')->name('departmentadmin.manageProfessorsList');
Route::view('/department_admin/manage_subjects_list', 'DepartmentAdmin.manage_subjects_list')->name('departmentadmin.manageSubjectsList');


