<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TuteursControlleur extends Controller
{
    function index(){ 
        $nationalites=$nationalites::all();
    
       return view('ListeEtudiant',['etudiantsrep'=>$etudiants]);
    }
    
    function create(){
       return view('Formulaire');
    }
    function strore(Request $request){
       $tuteurs=new tuteurs();
       $tuteurs->id=$request->id;
       $tuteurs->tuteurs=$request->tuteurs;


$tuteurs->save();
return redirect('Formulaire');
}
}
