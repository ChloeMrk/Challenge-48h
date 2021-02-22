<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    //
    public function form(){
        return view(('Connexion/connexion'));
    }

    public function connexion(){
        request()->validate([
            'email' =>['required','email'],
            'password' => ['required'],
        ]);

        $result = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

       
        return back()->withErrors([
            'email' =>"Mauvaise email ou mot de passe. Réessayer ou Inscrivez-vous"
        ]);
    }
}
