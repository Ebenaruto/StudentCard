@extends('layouts.dashboard')

@section('dashboard-content')

<h1> <center> Formulaire d'enregistrement </center></h1>
<form action="{{url('ajouter')}}" method="post"  enctype="multipart/form-data" >
        @csrf
  				<div class="row">
    				<div class="col">
      					<input type="text" class="form-control" name="matricule" placeholder="matricule">
    				</div>
    				<div class="col">
      					<input type="text" class="form-control" name="nom"placeholder="nom">
    				</div>
  				</div>
				  <br>
				  <div class="row">
    				<div class="col">
      					<input type="text" class="form-control" name="prenom" placeholder="prenom">
    				</div>
    				<div class="col">
						  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="sexe" required>
                        <option >sexe</option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                        <option value="Autre">Autre</option>
                      </select>
    				</div>
  				</div>
                <br>
				<div class="row">
    				<div class="col">
					<input type="date"name="datedenaissance" class="form-control" placeholder="datedenaissance" required>
    				</div>
    				<div class="col">
					<input type="file" class="form-control-file"  name="photo" placeholder="photo" id="exampleFormControlFile1">
    				</div>
  				</div>
				  <br>
				  <div class="row">
    				<div class="col">
      					<input type="text" class="form-control" name="nationalite" placeholder="nationalité">
    				</div>
    				<div class="col">
      					<input type="fichier" class="form-control" name="telephone"placeholder="telephone">
    				</div>
  				</div>
				  <br>
				  <div class="row">
    				<div class="col">
      					<input type="text" class="form-control" name="email" placeholder="email">
    				</div>
    				<div class="col">
      					<input type="text" class="form-control" name="anneeaccademiques"placeholder="anneeaccademique">
    				</div>
  				</div>
				  <br>
				  <div class="row">
    				<div class="col">
      					<input type="text" class="form-control" name="filieres" placeholder="filiere">
    				</div>
    				<div class="col">
					<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="cycle" required>
                        <option >cycle</option>
                        <option value="L1">Licence</option>
                        <option value="L2">Master</option>
                        <option value="L3">Doctorat</option>
                      </select>    				</div>
  				</div>
				  <br>
				  <div class="row">
    				<div class="col">
					<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="niveaux" required>
                        <option >niveaux</option>
                        <option value="L1">L1</option>
                        <option value="L2">L2</option>
                        <option value="L3">L3</option>
                      </select>
    				</div>
    				<div class="col">
					
      					<input type="text" class="form-control" name="nomtuteurs" placeholder="nom du tuteur">
    				</div>
  				</div>
				  <br>
				  <div class="row">
    				<div class="col">
      					<input type="text" class="form-control" name="prenomtuteurs" placeholder="prenom du tuteurs">
    				</div>
    				<div class="col">
      					<input type="text" class="form-control" name="telephonetuteurs"placeholder="telephone du tuteurs">
    				</div>
  				</div>

				  
				 
  				<br><br>
				 <center>         
				 <button type="submit" class="btn btn-info">Enregistrer</button>
				 <button type="submit" class="btn btn-danger">Retour</button></center>
			</form>

            @endsection