@extends('main')
@section('title', 'édition de la recette')
@section('content')
    {{dump($recette)}}
    <form action="/recettes/{{$recette->id}}" class="form-group" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <table class="table">
            <thead>
            <tr>
                <th>Propriété</th>
                <th>Valeur</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Boisson</td>
                <td><select name="boissonId" id="choixBoisson" class="form-control" disabled>
                        <option value="{{$recette->boisson->id}}">{{$recette->boisson->name}}</option>
                    </select></td>
            </tr>
            <tr>
                <td>Ingrédients</td>
                <td><select name="ingredientId" id="choixIngredient" class="form-control">
                        @foreach($ingredients as $ingredient)
                            <option value="{{$ingredient->id}}" <?php if ($ingredient->id == $recette->ingredient->id){echo 'selected';}?> >{{$ingredient->name}}</option>
                        @endforeach
                    </select></td>
            </tr>
            <tr>
                <td>Quantité</td>
                <td><input name="quantite" type="number" value="{{$recette->quantite}}" min="0" class="form-control"></td>
            </tr>
            </tbody>
        </table>

        <input type="submit" value="Enregistrer" class="btn btn-success">
    </form>
@endsection