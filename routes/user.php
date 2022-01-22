<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;
Route::view('/login_as', 'multi_login_space')->name('loginAs');
