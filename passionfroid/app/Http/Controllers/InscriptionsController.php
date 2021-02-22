<?php

namespace App\Http\Controllers;
use App\Models\User as User;

use Illuminate\Http\Request;

class InscriptionsController extends Controller
{
    //
    public function inscription(){
        return view('inscription');
    }

    public function inscriptions(){
        request()->validate([

            'email' =>['required','email'],
            'name' => ['required'],
            'password' => ['required','confirmed'],
            'password' => ['required'],
          

        ]);

        $user = User::create([
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'name' => request('name'),
            
        ]);
    }
}
