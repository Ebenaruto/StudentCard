<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiveauxController extends Controller
{
    function index(){ 
        $niveaux=$niveaux::all();
    
       return view('ListeEtudiant',['etudiantsrep'=>$etudiants]);
    }
    
    function create(){
       return view('Formulaire');
    }
    function strore(Request $request){
       $niveaux=new niveaux();
       $niveaux->id=$request->id;
       $niveaux->niveaux=$request->niveaux;


$niveaux->save();
return redirect('Formulaire');
}
}
