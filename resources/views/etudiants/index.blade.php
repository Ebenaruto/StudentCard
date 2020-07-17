@extends('layouts.app')
@section('content')
<h1>LISTE DES ETUDIANTS<h1>
  <a href="etudiants/enregistrer" class="btn btn-primary my-3">Nouveau étudiant</a>
  <a href="etudiants/enregistrer" class="btn btn-primary my-3">Licence 1</a>
  <a href="etudiants/enregistrer" class="btn btn-primary my-3">Licence 2</a>
  <a href="etudiants/enregistrer" class="btn btn-primary my-3">Licence 3</a>
      
    <ul>
     
     <table class="table bg-primary table-bordered">
        <thead>
          <tr>
            <th scope="col">N° Matricule</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Détail</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($etudiants as $etudiant)
          <tr>
          <th scope="row">{{$client->id}}</th>
            <td><a href="/clients/{{$client->id}}">{{$client->name}}</a></td>
            <td>{{$client->status}}</td>
            <td>{{$client->entreprise->name}}</td>
          </tr>
          @endforeach
        </tbody>
    </table>
  
    </ul>
    
@endsection

