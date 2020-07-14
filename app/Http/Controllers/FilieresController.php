<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\filieres;

class FilieresController extends Controller
{
    function index(){ 
        $filieres=$filieres::all();
    
       return view('ListeEtudiant',['etudiantsrep'=>$etudiants]);
    }
    
    function create(){
       return view('Formulaire');
    }
    function strore(Request $request){
       $filieres=new filieres();
       $filieres->id=$request->id;
       $filieres->filieres=$request->filieres;


$filieres->save();
return redirect('Formulaire');
}
}
