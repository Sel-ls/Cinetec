<div class="d-grid d-md-block">
@foreach($dadossala as $dadossessaos)
@if($dadossessaos->numSala == $dadossalas->numSala)
    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#Modal">{{$dadossessaos->sessao}}</button>
@endif
@endforeach
</div>