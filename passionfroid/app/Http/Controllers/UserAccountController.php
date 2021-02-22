<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    

    public function signout(){
        auth()->logout();

        return redirect('/connexion');
    }

    
}
