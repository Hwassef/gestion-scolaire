<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;
Route::prefix('admin')->name('admin.')->middleware('theme:admin')->group(function(){
    Route::View('/login', 'auth.login')->name('login');
    Route::post('/login', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login');
    Route::post('/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');
    Route::View('/home', 'home')->name('home');
    Route::get('/manage_admin_department', [App\Http\Controllers\Admin\ManageDepartmentAdminController::class, 'index'])->name('displayMangeDepartmentAdmin');
});
