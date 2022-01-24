<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (!Auth::guard('student')->attempt($request->only('email', 'password'))) {
            throw ValidationException::withMessages([
                'email' => 'Invalid Email or Password'
            ]);
        }

        return redirect()->intended(route('student.home',));
    }

    public function logout()
    {
        Auth::guard('student')->logout();
        return redirect('/');
    }
}
