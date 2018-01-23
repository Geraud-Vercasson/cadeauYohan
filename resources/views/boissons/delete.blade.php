@extends('main')
@section('title')
    SUPPRESSION DE {{strtoupper($boisson->name)}}
@endsection
@section('content')
    <h3>Etes vous sûr de vouloir supprimer la boisson {{$boisson->name}} ?</h3>
    <form action="/boissons/delete/{{$boisson->id}}" method="post">
        {{csrf_field()}}
         <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Supprimer" class="btn btn-danger">
        </form>
    </form>
    <a href="/boissons" class="btn btn-primary"> Annuler</a>
@endsection