<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnexionController extends Controller
{
    public function formulaire(){
     

        return view('connexion');
    }

    public function traitement(Request $request){
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

    $resultat=
Auth::attempt([
         'email'=> $request->get('email'),
         'mp'=> $request->input('password'),
]);
var_dump($resultat);  
      
    return "conectée";
     
    }
}
