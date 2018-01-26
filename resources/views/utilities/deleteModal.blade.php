<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
    Supprimer
</button>

<!-- Modal -->
<form action="{{$actionLink}}" class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true" method="post">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <span><b>Etes vous sûr de vouloir supprimer {{$element}} ? cette action est définitive!</b></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <input type="submit" class="btn btn-primary" value="Supprimer">
            </div>
        </div>
    </div>
</form>