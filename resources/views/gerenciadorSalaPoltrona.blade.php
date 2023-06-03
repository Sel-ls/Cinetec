@extends('padrao')
@section('content')
<div class="container p-4 bg-dark text-bg-dark">
    <div class="row row-cols-1">
      <div class="col">
        <h3>Salas e sessões</h3>
      </div>
      @foreach($dadossala as $dadossalas)
      <div class="col">
        <h5>Sala {{$dadossalas->numSala}}</h5>
      </div>
      
      @include('sessao')
      @endforeach
    </div>
</div>
@endsection