<?php

namespace App\Http\Controllers;


use App\Models\Profil;
use Illuminate\Http\Request;

class ControllerAjoutProfil extends Controller
{
    public function store(Request $request)
    {
        // $name = Storage::disk('public')->put('avatars', $request->file('avatar'));

        $validated = $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'service' => 'required|max:255',
            'responsable' => 'required|max:255',
            'tags' => 'required|max:255',
            'telephone' => 'required|max:10',
            'email' => 'required|max:255', 'email',
            'photo' => 'required'

        ]);


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

        $validated['photo'] = $filename;

        Profil::create($validated);

        return redirect('service');
    }

    public function show()
    {
        return view('ajoutProfil');
    }
}
