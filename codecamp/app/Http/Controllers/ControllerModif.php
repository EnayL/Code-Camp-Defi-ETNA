<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profil;

class ControllerModif extends Controller
{

    function show($id)
    {
        $data = Profil::where('id', $id)->first();
        return view('modifProfil', ['profils' => $data]);
    }



    public function update(Request $request, $id)
    {

        $user = Profil::find($id);

        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->service = $request->service;
        $user->responsable = $request->responsable;
        $user->tags = $request->tags;
        $user->telephone = $request->telephone;
        $user->email = $request->email;



        $filename = time() . '.' . $request->photo->extension();
        //creation nom unique photo

        $request->file('photo')->storeAs(
            'avatars',
            //stock dans avatars
            $filename,
            // avec le nom filename
            'public'
            // dans le storage public.
        );
        $user->photo = $filename;

        $user->update();


        return redirect('service');
    }
}
