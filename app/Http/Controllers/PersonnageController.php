<?php

namespace App\Http\Controllers;
use App\Models\Personnage;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class PersonnageController extends Controller{

    public function list(){ 
        $Allpersonages = Personnage::all();
        return view('personnages.all', ['Allpersonages'=> $Allpersonages]);
    }

    public function create()
    {
        return view('personnages.create');
    }

    public function store(Request $request){
        $personnage = new Personnage();
        $personnage->nom = $request->Nom;
        $personnage->description= $request->Description;
        $personnage->specialite= $request->Specialite;
    
        $personnage->save();
        return view('personnages.store');
    }

    public function show($id) {
        $personnage = Personnage::find($id);
        return view('personnages.show', ['personnage' => $personnage]); 
    }

    public function sign(){
        return view('inscription');
    }
    
    public function signok(Request $request){
        $utilisateurs = new Utilisateur;
        $utilisateurs->mp = $request->mp;
        $utilisateurs->email = $request->email;

        $utilisateurs->save();
        return view('personnages.create');
        
    }

    public function listadmin(){
        $Allutilisateurs = Utilisateur::all();
        return view('utilisateurs', ['Allutilisateurs'=> $Allutilisateurs]);

    }


  
    
};