<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ControllerProfil extends Controller
{

    function show($id)
    {
        $data = Profil::where('id', $id)->first();
        return view('profil', ['profils' => $data]);
    }



    public function destroy($id)
    {


        $profil = Profil::findOrFail($id);
        $profil->delete();

        return redirect('/service');
    }
}
