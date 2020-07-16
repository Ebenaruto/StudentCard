<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tuteurs;
use App\etudiants;
// use App\niveaux;
// use App\cycles;
// use App\filieres;
// use App\nationalites;
// use App\anneeaccademiques;

class CardsController extends Controller
     {
        function index(){ 
            
            $tuteurs=$tuteurs::all();
            $etudiants=$tetudiants::all();
            // $cycles= $cycles::all();
            // $niveaux= $niveaux::all();
            // $filieres= $filieres::all();
            // $nationalites=$nationalites::all();
            // $anneeaccademiques=$anneeaccademiques::all();

     return view('ListeEtudiant',['etudiantsrep'=>$etudiants]);
    }
    
    function create(){
       return view('Formulaire');
    }
    function strore(Request $request)
    {
       $tuteurs=Tuteurs::create([  
      "nomtuteurs"=>$request->nomtuteurs,
      "prenomtuteurs"=>$request->prenomtuteurs,
       "telephonetuteurs"=>$request->telephonetuteurs
       ]);
      //  $niveaux=new niveaux();
      //  $niveaux->id=$request->id;
      //  $niveaux->niveaux=$request->niveaux;

      //  $filieres=new filieres();
      //  $filieres->id=$request->id;
      //  $filieres->filieres=$request->filieres;

      //  $cycles=new cycles();
      //  $cycles->id=$request->id;
      // $etudiants->telephone=$request->telephone;
// 
       $etudiants=new etudiants();
       $etudiants->matricule=$request->matricule;
       $etudiants->nom=$request->nom;
       $etudiants->tuteur_id=$tuteurs->id;
       $etudiants->prenom=$request->prenom;
       $etudiants->sexe=$request->sexe;
       $etudiants->datedenaissance=$request->datedenaissance;
       $etudiants->photo=$request->photo->store('ev_images','public');
       $etudiants->nationalite=$request->nationalite;
       $etudiants->telephone=$request->telephone;
       $etudiants->email=$request->email;
       $etudiants->anneeaccademiques=$request->anneeaccademiques;
       $etudiants->filiere=$request->filiere;
       $etudiants->cycle=$request->cycle;


      //  $nationalites=new nationalites();
      //  $nationalites->id=$request->id;
      //  $nationalites->nationalites=$request->nationalites;

      //  $anneeaccademiques=new anneeaccademiques();
      //  $anneeaccademiques->id=$request->id;
      //  $anneeaccademiques->$anneeaccademiques=$request->$anneeaccademiques;



 
      $tuteurs->save();
      $etudiants->save();
      // $cycles->save();
      // $niveaux->save();
      // $anneeaccademiques->save();
      // $filieres->save();
      // $nationalites->save();
   return redirect('Formulaire');
}

   }
