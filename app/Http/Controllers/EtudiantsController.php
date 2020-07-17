<?php

namespace App\Http\Controllers;
use App\Etudiant;
use App\Cycle;
use App\Niveau;
use App\Filiere;
use App\Tuteur;
use Illuminate\Http\Request;

class EtudiantsController extends Controller
{
    public function index() 
    {

        $etudiants = Etudiant::all();
       
        return view('etudiants.index', compact('etudiants'));
             
    }

    public function enregistrer(){

       $cycles= Cycle::all();
       $niveaux= Niveau::all();
       $filieres= Filiere::all();
       $tuteurs= Tuteur::all();

        return \view('etudiants.enregistrer', compact('cycles','niveaux','filieres','tuteurs'));

    }

    public function store(){
        $data= request()->validate([
            'matricule'=>'required|min:4',
            'nom'=>'required',
            'prenom'=>'required',
            'sexe'=>'required',
            'datedenaissance'=>'required|date',
            'photo'=>'required|file',
            'nationalite'=>'required',
            'telephone'=>'required|integer',
            'anneeacademique'=>'required',
            'email'=>'required|email',
            'cycle_id'=>'required|integer',
            'filiere_id'=>'required|integer',
            'niveau_id'=>'required|integer',
            'tuteur_id'=>'required|integer'
        ]);
       Etudiant:: create($data);
        return back();
    }
    public function show(Etudiant $etudiant){

        return view('clients.show', compact('client'));

    }
    public function edit(Client $client){

        $entreprises= Entreprise::all();

        return view('clients.edit', compact('client', 'entreprises'));
    }
}
