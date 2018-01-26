@extends("main")
@section('title')
    Détails : {{$ingredient->name}}
@endsection
@section('content')
    <h1>{{$ingredient->name}}</h1>
    <h2>Stock : {{$ingredient->stock}}</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Boisson</th>
            <th>Quantité utilisée</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ingredient->recettes as $recette)
            <tr>
                <td>{{$recette->boisson->name}}</td>
                <td>{{$recette->quantite}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="/ingredients/{{$ingredient->id}}/edit" class="btn btn-success">Modifier</a>
@include('utilities.deleteModal', ['actionLink' => route('ingredients.destroy', ['id' => $ingredient->id]),
                                    'element' => $ingredient->name]);
@endsection