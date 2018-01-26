@extends("main")
@section('title', 'Nouvel ingrédient')
@section("content")
    <h1>Ajouter un nouvel ingrédient</h1>
    <form action="/ingredients" method="post">
        <div class="form-group">
            {{csrf_field()}}
            <label for="newIngredientName">Ingrédient à ajouter</label>
            <input id="newIngredientName" name="ingredient" type="text" class="form-control" placeholder="Entrez le nom de l'ingrédient">
            <label for="newStock">Stock de l'ingrédient</label>
            <input id="newStock" type="number" class="form-control" name="stock" placeholder="Entrez le stock">
            <input type="submit" value="Enregistrer" class="btn btn-success">
        </div>
    </form>
@endsection