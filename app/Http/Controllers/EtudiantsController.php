<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\etudiants;
use App\tuteurs;

class EtudiantsController  extends Controller
{ 
function index(){ 
    $etudiants=etudiants::all();

   return view('ListeEtudiant',['etudiantsrep'=>$etudiants]);
}

function create(){
   return view('Formulaire');
}
function strore(Request $request){
   $tuteurs=new tuteurs();
   $tuteurs->idtuteur=$request->idtuteur;
   $tuteurs->tuteurs=$request->tuteurs;
   $tuteurs=new tuteurs();
   $etudiants=new etudiants();
   $etudiants->matricule=$request->matricule;
   $etudiants->nom=$request->nom;
   $etudiants->prenom=$request->prenom;
   $etudiants->sexe=$request->sexe;
   $etudiants->datedenaissance=$request->datedenaissance;
   $etudiants->photo=$request->photo->store('ev_images','public');
   $etudiants->telephone=$request->telephone;
   $etudiants->annéeaccademique=$request->annéeaccademique;
   $etudiants->email=$request->email;
   
   



   $etudiants->save();
   return redirect('Formulaire');
  }

}



