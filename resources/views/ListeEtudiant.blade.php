@extends('layouts.dashboard')

@section('dashboard-content')

<div>
        <table class="table table-bordered table-striped">
            <thead>
            <th>Nº matricule</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Détail</th>
            </thead>
            <tbody>
            @foreach($etudiantsrep as $etudiant)
                <tr>
                    <td>{{$etudiant->matricule}}</td>
                    <td>{{$etudiant->nom}}</td>
                    <td>{{$etudiant->prenom}}</td>
                    <td>{{$etudiant->Détail}}</td>
                    <td> <a href="{{url('detail/'.$etudiant->matricule)}}">Detail</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div>

    </div>

    @endsection