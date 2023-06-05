@extends('padrao')

@section('content')
<link rel="stylesheet" href="./style/index.css">
<main>
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide mx-auto" style="max-width: 70vw" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="5000">
            <img src="./img/img1.png" class="d-block w-100" alt="Filmes em Cartaz">
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="./img/img1.png" class="d-block w-100" alt="Filmes em Cartaz">
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="./img/img1.png" class="d-block w-100" alt="Filmes em Cartaz">
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="./img/img1.png" class="d-block w-100" alt="Filmes em Cartaz">
          </div>
        </div>
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
            aria-label="Slide 4"></button>
        </div>
      </div>
    </div>
    
    <div class="container justify-content-center align-items-center">
      <h1 class="text-center mb-5">Filmes em Cartaz</h1>
      <div class="row row-cols-1 row-cols-md-3 g-4">

      @foreach($dadosfilme as $dadosfilmes)
        <div class="col">
          <div class="card h-100 card-sm position-relative top-50 start-50 translate-middle">
            <img src="{{asset('storage/app/'.$dadosfilmes->capaFilme)}}" class="card-img-top" alt="Filme 1">
            <div class="card-body">
              <h5 class="card-title">{{$dadosfilmes->nomeFilme}}</h5>
              <p class="card-text">{{$dadosfilmes->sinopseFilme}}</p>
              <form method="post" action="{{('/buscar-sala')}}">
                  @csrf
                  <button type="submit" name="nomeFilme" value="{{$dadosfilmes->nomeFilme}}" class="btn">Escolher lugar</button>
              </form>
              </form>
            </div>
          </div>
        </div>
      @endforeach

      </div>
    </div>

    <div class="carousel-inner slide mx-auto" style="max-width: 70vw; margin-top: 5%;">
      <div class="carousel-item active">
        <img src="./img/img10.png" class="d-block w-100" alt="Filmes em Cartaz">
      </div>
    </div>

  </main>
@endsection