@extends('main')
@section('title', 'Nouvelle recette')
@section('content')
    <form action="/recettes/store" method="post">
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
                            <option value="$boisson->id">{{$boisson->name}}</option>
                        @endforeach
                    </select></td>
            </tr>
            </tbody>
        </table>
        {{csrf_field()}}
    </form>
@endsection