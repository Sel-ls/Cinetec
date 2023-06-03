@extends('padrao')

@section('content')
<div class="row justify-content-center align-items-center">
    <div class="col-6">
        <form method="post" action="{{route('cadastro-filme')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="input-group mb-3 mx-1">
                        <label class="input-group-text" for="inputGroupNomeFilme">Filmes</label>
                        <select class="form-select bs-danger-text-emphasis" name="nomeFilme"
                            aria-label="Default select example" id="inputGroupNomeFilme">
                            <option selected disabled value="">...</option>
                            @foreach($dadosfilme as $dadosfilmes)
                            <option value="{{$dadosfilmes->nomeFilme}}">{{$dadosfilmes->nomeFilme}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-3 mx-1">
                        <label class="input-group-text" for="inputGroupQtPolt">Filmes</label>
                        <select class="form-select bs-danger-text-emphasis" name="qtPolt"
                            aria-label="Default select example" id="inputGroupQtPolt">
                            <option selected  value="100">10x10</option>
                            <option value="96">12x8</option>
                            <option value="80">8x10</option>
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-3 mx-1">
                        <label for="numeroSala" class="input-group-text">Número de Poltronas</label>
                        <input type="number" min="1" max="25" name="numSala" class="form-control" id="numeroSala">
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-3 mx-1">
                        <label class="input-group-text" for="inputGroupStatusSala">Status Sala</label>
                        <select class="form-select bs-danger-text-emphasis" name="qtPolt"
                            aria-label="Default select example" id="inputGroupStatusSala">
                            <option selected  value="1">Vazia</option>
                            <option value="2">Em sessão</option>
                            <option value="3">Cheia</option>
                            <option value="0">Desativada</option>
                        </select>
                    </div>
                </div>

                <div class="col-4">
                    <div class="input-group mb-3 mx-1">
                        <label for="numeroSala" class="input-group-text">Horario da sessão</label>
                        <input type="time" min="1" max="25" name="numSala" class="form-control" id="numeroSala">
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-3 mx-1">
                        <label for="numeroSala" class="input-group-text">Data da sessão</label>
                        <input type="date" min="1" max="25" name="numSala" class="form-control" id="numeroSala">
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-3 mx-1">
                        <label class="input-group-text" for="inputGroupStatusSala">Status Sessão</label>
                        <select class="form-select bs-danger-text-emphasis" name="qtPolt"
                            aria-label="Default select example" id="inputGroupStatusSala">
                            <option selected  value="1">Vazia</option>
                            <option value="2">Iniciada</option>
                            <option value="3">Terminada</option>
                            <option value="0">Desativada</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-3 form-check">
                <label for="filmeInput" class="form-label">Filme:</label>
                <input type="text" name="nomeFilme" class="form-control" id="filmeInput">
            </div>
            <div class="mb-3 form-check">
                <label for="atoresInput" class="form-label">Atores:</label>
                <input type="text" name="atoresFilme" class="form-control" id="atoresInput">
            </div>
            <div class="mb-3 form-check">
                <label for="dataLancamentoInput" class="form-label">Data de Lançamento:</label>
                <input type="date" name="dataLancamento" class="form-control" id="dataLancamentoInput">
            </div>
            <div class="mb-3 form-check">
                <label for="sinopseInput" class="form-label">Sinopse:</label>
                <textarea class="form-control" name="sinopseFilme" id="sinopseInput" rows="3"></textarea>
            </div>
                <hr/>
            <div class="row justify-content-center align-items-center ms-1 mb-3">
                <div class="mb-2 form-check col-6">
                    <label for="capaInput" class="form-label">Capa:</label>
                    <input class="form-control" name="capaFilme" type="file" id="capaInput">
                </div>
                <div class="mb-2 form-check col-6">
                    <label for="bannerInput" class="form-label">Banner:</label>
                    <input class="form-control" name="bannerFilme" type="file" id="bannerInput">
                </div>
                <div class="card col-6 px-3" aria-hidden="true">
                    <img class="card-img-top img-fluid" src="./img/placeholder.jpg" style="height: 20Vh; object-fit: contain;" id="imgCapa">
                </div>
                <div class="card col-6 px-3" aria-hidden="true">
                    <img class="card-img-top img-fluid" src="./img/placeholder.jpg" style="height: 20Vh; object-fit: contain;" id="imgBanner">
                </div>
            </div>
                <hr/>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</div>
<script>
function readImageCapa() {
    if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.getElementById("imgCapa").src = e.target.result;
        };       
        file.readAsDataURL(this.files[0]);
    }
}

function readImageBanner() {
    if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.getElementById("imgBanner").src = e.target.result;
        };       
        file.readAsDataURL(this.files[0]);
    }
}
document.getElementById("capaInput").addEventListener("change", readImageCapa, false);

document.getElementById("bannerInput").addEventListener("change", readImageBanner, false);
</script>
@endsection