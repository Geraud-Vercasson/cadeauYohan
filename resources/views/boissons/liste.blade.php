@extends('main')
@section('title','Liste des boissons')
@section('content')
    <div>
      <table class="table">
          <thead>
          <tr>
              <th>ID
                  <form action="/boissons/idSort" method="POST">
                      <input type="hidden" name="_method" value="PUT">
                      {{csrf_field()}}
                      <input type="submit" class="btn btn-default" value="Tri">
                  </form>
              </th>
              <th>name
                  <form action="/boissons/nameSort" method="POST">
                          <input type="hidden" name="_method" value="PUT">
                          {{csrf_field()}}
                          <input type="submit" class="btn btn-default" value="Tri">
                      </form>
              <th>price
                  <form action="/boissons/priceSort" method="POST">
                      <input type="hidden" name="_method" value="PUT">
                      {{csrf_field()}}
                      <input type="submit" class="btn btn-default" value="Tri">
                  </form></th>

          </tr>
          </thead>
          <tbody>
          @foreach($listeBoissons as $boisson)
              <tr>
                  <td>{{$boisson->id}}</td>
                  <td>{{$boisson->name}}</td>
                  <td>{{$boisson->price}}</td>
                  <td><a href="/recettes/{{$boisson->id}}" class="btn btn-info"> Recette</a></td>
                  <td><a class="btn btn-info" href="/boissons/edit/{{$boisson->id}}"> Editer</a></td>
                  <td><a class="btn btn-danger" href="/boissons/delete/{{$boisson->id}}">Supprimer</a></td>
              </tr>

          @endforeach
          </tbody>
      </table>
    </div>
    <div>
        <form class="form-group" action="/boissons/add" method="post">
            <div class="row">
                <div class="col-sm-9 col-sm-offset-1">
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="newBoisson" class="form-control">Boisson à ajouter</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="newBoisson" class="form-control" type="text" name="newBoisson" placeholder="nouvelle boisson">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="newPrice" class="form-control">Prix de la boisson</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="newPrice" class="form-control" type="number" name="newPrice" min="0" step="5">
                        </div>
                    </div>
                    <div class="row col-sm-4 col-sm-push-8">
                        <input class="form-control btn btn-primary" type="submit" value="Ajouter">
                    </div>
                </div>
            </div>
            {{csrf_field()}}
        </form>
    </div>
@endsection
