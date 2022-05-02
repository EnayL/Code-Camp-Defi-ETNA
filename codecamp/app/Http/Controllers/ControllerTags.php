<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerService extends Controller
{
    function show(Request $request)
    {
        if (isset($request->role)) {
            $data = DB::select('select * from profils where service = ?', $request->role);
        }
        $data = Profil::all();
        return view('service', ['profils' => $data]);
    }
}
