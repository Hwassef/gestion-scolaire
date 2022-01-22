<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;
Route::prefix('admin')->name('admin.')->middleware('theme:admin')->group(function(){
    Route::View('/login', 'auth.login')->name('login');

});
