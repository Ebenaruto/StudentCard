@extends('layouts.app')
@section('content')
<h1>Enregistrer un nouveau étudiant</h1>
<form action="/etudiants" method="POST">
 @include('includes.formulaire-enregistrement')
  <button type="submit" class="btn btn-primary">ajouter un étudiant</button>
  
  </form>

@endsection