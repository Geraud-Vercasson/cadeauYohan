@extends('main')
@section('title', 'Nouvel ingrédient dans la recette')
@section('content')
    <form action="/recettes" method="post">
        <table class="table">
            <thead>
            <th>Propriété</th>
            <th>Valeur</th>
            </thead>
            <tbody>
            <tr>
                <td>Boisson :</td>
                <td><select name="idBoisson" id="selectBoisson" class="form-control">
                        @foreach($boissons as $boisson)
                            <option value="{{$boisson->id}}">{{$boisson->name}}</option>
                        @endforeach
                    </select></td>
            </tr>
            <tr>
                <td>Ingrédient :</td>
                <td><select name="idIngredient" id="selectIngredient" class="form-control">
                        @foreach($ingredients as $ingredient)
                            <option value="{{$ingredient->id}}">{{$ingredient->name}}</option>
                        @endforeach
                    </select></td>
            </tr>
            <tr>
                <td>Quantité</td>
                <td><input type="number" name="quantite" min="0" class="form-control"></td>
            </tr>
            </tbody>

        </table>
        {{csrf_field()}}
        <input type="submit" value="Enregistrer" class="btn btn-primary">
    </form>
@endsection