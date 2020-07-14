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
            @foreach($ventes as $vente)
                <tr>
                    <td>{{$vente->Matricule}}</td>
                    <td>{{$vente->Produit->nom}}</td>
                    <td>{{$vente->prénom}}</td>
                    <td>{{$vente->Détail}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div>

    </div>

    @endsection