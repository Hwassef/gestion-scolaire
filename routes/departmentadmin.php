<?php

use Illuminate\Support\Facades\Route;
Route::view('/department_admin/home', 'DepartmentAdmin.home')->name('departmentadmin.home');
Route::post('login_as/department_admin', [\App\Http\Controllers\DepartmentAdmin\AuthController::class, 'login'])->name('departmentadmin.login');
