@extends('main')
@section('title','liste des recettes')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Boisson</th>
            <th>Recette</th>
        </tr>
        </thead>
        <tbody>
        @foreach($boissons as $boisson)
            <tr>
                <td>{{$boisson->name}}</td>
                <td>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Ingrédient</th>
                            <th>Quantité</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($boisson->recettes as $recette)
                            <tr>
                                <td>{{$recette->ingredient->name}}</td>
                                <td>{{$recette->quantite}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @endsection