<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tuteurs;
use App\etudiants;
//  use App\niveaux;
 use App\cycles;
use App\filieres;
 use App\nationalites;
// use App\anneeaccademiques;

class CardsController extends Controller
     {
        function index(){ 
            
         
            // $tuteur=$tuteurs::all();
            $etudiants=etudiants::all();
            // $cycles= $cycles::all();
            // $niveaux= $niveaux::all();
            //  $filieres= $filieres::all();
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

      $filieres=Filieres::create([
         //  $filieres->id=$request->id;
        "filieres"=>$request->filieres
        ]);

      $cycles=Cycles::create([
         //  $cycles=new cycles();
         //  $cycles->id=$request->id;
          "cycle"=> $request->cycle
          ]);

          
      // $niveaux=Niveaux::create([
      //       "niveaux"=> $request->niveaux
      //     ]);

          $nationalites=Nationalites::create([
            //  $cycles=new cycles();
            //  $cycles->id=$request->id;
             "nationalites"=> $request->nationalite
             ]);

       $etudiants=new etudiants();
       $etudiants->matricule=$request->matricule;
       $etudiants->nom=$request->nom;
       $etudiants->tuteur_id=$tuteurs->id;
       $etudiants->cycle_id=$cycles->id;
       $etudiants->filiere_id=$filieres->id;
      //  $etudiants->niveau_id=$niveaux->id;
       $etudiants->nationalite_id=$nationalites->id;

      $etudiants->prenom=$request->prenom;
       $etudiants->sexe=$request->sexe;
       $etudiants->datedenaissance=$request->datedenaissance;
       $etudiants->photo=$request->photo->store('ev_images','public');
      //  $etudiants->nationalite=$request->nationalite;
       $etudiants->telephone=$request->telephone;
       $etudiants->email=$request->email;
       $etudiants->anneeaccademiques=$request->anneeaccademiques;
      //  $etudiants->filiere=$request->filiere;
      //  $etudiants->cycle=$request->cycle;


      //  $nationalites=new nationalites();
      //  $nationalites->id=$request->id;
      //  $nationalites->nationalites=$request->nationalites;

      //  $anneeaccademiques=new anneeaccademiques();
      //  $anneeaccademiques->id=$request->id;
      //  $anneeaccademiques->$anneeaccademiques=$request->$anneeaccademiques;



 
      $tuteurs->save();
      $etudiants->save();
      // $cycles->save();
      //  $niveaux->save();
      // $anneeaccademiques->save();
      //  $filieres->save();
      // $nationalites->save();
   return redirect('Formulaire');
}
function detail($matricule)
{
   $etudiants=etudiants::where("matricule", "=", $matricule)->get();
   return view("detail", ["etudiants"=> $etudiants[0]]);

   }
}
