<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\cycles;
class CyclesController extends Controller
{
    function index(){ 
        $cycles=$cycles::all();
    
       return view('ListeEtudiant',['etudiantsrep'=>$etudiants]);
    }
    
    function create(){
       return view('Formulaire');
    }
    function strore(Request $request){
       $cycles=new cycles();
       $cycles->id=$request->id;
       $cycles->cycles=$request->cycles;


$cycless->save();
return redirect('Formulaire');
}
}
