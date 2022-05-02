<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginTest extends Controller
{

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/service');
        }
        return back()->withErrors([
            'email' => 'Le mot de passe et le login saisis ne correspondent pas.',
        ]);
    }
}
