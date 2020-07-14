<?php

namespace App\Http\Controllers;
use App\tuteurs;

use Illuminate\Http\Request;

class TuteursController extends Controller
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
       $tuteurs->idtuteur=$request->idtuteur;
       $tuteurs->tuteurs=$request->tuteurs;


$tuteurs->save();
return redirect('Formulaire');
}
}
