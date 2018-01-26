@extends("main")
@section('title')
    Editer {{$ingredient->name}}
@endsection
@section('content')
    <h1>Modification de l'ingrédient {{$ingredient->name}}</h1>
    <form action="/ingredients/{{$ingredient->id}}" method="post">
        <table class="table">
            <thead>
            <th>Propriété</th>
            <th>Valeur</th>
            </thead>
            <tbody>
            <tr>
                <td>id</td>
                <td>{{$ingredient->id}}</td>
            </tr>
            <tr>
                <td>name</td>
                <td><input type="text" value="{{$ingredient->name}}" name="newName"></td>
            </tr>
            <tr>
                <td>stock</td>
                <td><input type="number" value="{{$ingredient->stock}}" min=0, name="newStock"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Enregistrer les modifications" class="btn btn-primary"></td>
            </tr>
            </tbody>
        </table>
        {{csrf_field()}}
        {{method_field('PUT')}}
    </form>
@endsection