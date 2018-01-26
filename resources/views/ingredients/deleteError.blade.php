@extends('main')
@section('title','Impossible de supprimer')
@section('content')
    <h1>Impossible de supprimer l'ingrédient {{$ingredientName}}</h1>
    <p class="h2">Pensez à supprimer les recettes utilisant cet ingrédient avant!</p>
    <a href="/ingredients" class="btn btn-info">Retour</a>
@endsection