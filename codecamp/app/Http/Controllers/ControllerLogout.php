<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerLogout extends Controller
{
    public function logout(Request $request)
    {
    Auth::logout();
    return redirect('/service');
    }
}
