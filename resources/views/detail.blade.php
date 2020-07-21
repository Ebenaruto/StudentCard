@extends('layouts.dashboard')

@section('dashboard-content')
<div class="row">
  <div class="col-sm-6">
    <div class="card">
    <div >
          <div>
              <a href="#" class="image">  <img src= "{{asset('storage/'.$etudiants->photo)}}"  alt="" </a>
          </div>
        <div>
              <center><h2 class="card-title">Carte d'Etudiant</h2></center>
        </div>
    </div>

      <div class="card-body">
            <h3>{{$etudiants->matricule}} {{$etudiants->nom}}</h3> 

            <h3>{{$etudiants->prenom}} {{$etudiants->sexe}}</h3> 
            <h3>{{$etudiants->datedenaissance}} {{$etudiants->photo}}</h3> 

  

        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  </div>

@endsection
