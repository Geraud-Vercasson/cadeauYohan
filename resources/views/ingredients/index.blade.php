@extends('main')
@section('title','Liste des ingrédients')
@section('content')
    <h1> Liste des ingrédients</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Ingrédient</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allIngredients as $ingredient)
            <tr>
                <td>{{$ingredient->name}}</td>
                <td><a href="/ingredients/{{$ingredient->id}}" class="btn btn-success"> Détails</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/ingredients/create" class="btn btn-primary">Ajouter</a>
@endsection