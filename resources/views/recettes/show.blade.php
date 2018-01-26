@extends('main')
@section('title','recette')
@section('content')
    <table class="table">
        <h1>Recette de la boisson {{$boisson->name}}</h1>
        <thead>
        <tr>
            <th>Ingrédient</th>
            <th>Quantité</th>
        </tr>
        </thead>
        <tbody>
        @foreach($recetteCollection as $recette)
            <tr>
                <td>{{$recette->ingredient->name}}</td>
                <td>{{$recette->quantite}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="/recettes/create" class="btn btn-primary">Ajouter un ingrédient</a>
@endsection