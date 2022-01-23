<?php

use Illuminate\Support\Facades\Route;
Route::post('/login_as/professor', [\App\Http\Controllers\Professor\AuthController::class, 'login'])->name('professor.login');
Route::get('/professor/home', [\App\Http\Controllers\Professor\HomeController::class, 'index'])->name('professor.home');
