<?php

namespace App\Http\Controllers\DepartmentAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (!Auth::guard('admins_department')->attempt($request->only('email', 'password'))) {
            throw ValidationException::withMessages([
                'email' => 'Invalid Email or Password'
            ]);
        }

        return redirect()->intended(route('departmentadmin.home',));
    }

    public function logout()
    {
        Auth::guard('admins_department')->logout();
        return redirect('/');
    }
}
