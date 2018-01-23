@extends('main')
@section('title')
    Editer {{$boisson->name}}
@endsection
@section('content')
    <h1>Modification de la boisson {{$boisson->name}}</h1>
    <form action="/boissons/edit/{{$boisson->id}}" method="post">
        <table class="table">
            <thead>
                <th>Propriété</th>
                <th>Valeur</th>
            </thead>
            <tbody>
                <tr>
                    <td>id</td>
                    <td>{{$boisson->id}}</td>
                </tr>
                <tr>
                    <td>name</td>
                    <td><input type="text" placeholder="{{$boisson->name}}" name="newName"></td>
                </tr>
                <tr>
                    <td>prix</td>
                    <td><input type="number" placeholder="{{$boisson->price}}" min=0, step=5 name="newPrice"></td>
                </tr>
            <tr>
                <td><input type="submit" value="Enregistrer les modifications" class="btn btn-primary"></td>
            </tr>
            </tbody>
        </table>
        {{csrf_field()}}
    </form>
@endsection