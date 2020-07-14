<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NationalitesControlleur extends Controller
{
    function index(){ 
        $nationalites=$nationalites::all();
    
       return view('ListeEtudiant',['etudiantsrep'=>$etudiants]);
    }
    
    function create(){
       return view('Formulaire');
    }
    function strore(Request $request){
       $nationalites=new nationalites();
       $nationalites->id=$request->id;
       $nationalites->nationalites=$request->nationalites;


$nationalites->save();
return redirect('Formulaire');
}
}
