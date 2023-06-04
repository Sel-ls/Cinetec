@extends('padrao')

@section('content')
<div class="row justify-content-center align-items-center">
    <div class="col-6">
        <form method="post" action="{{route('cadastro-filme')}}" enctype="multipart/form-data">
            @csrf
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
            <!-- <div class="row">
                <div class="col ms-4">
                    <div class="input-group mb-3 mx-1">
                        <label class="input-group-text" for="inputGroupSelect01">Status</label>
                        <select class="form-select bs-danger-text-emphasis" name="statusFilme"
                            aria-label="Default select example" id="inputGroupSelect01">
                            <option selected value="1">Em breve</option>
                            <option value="2">Em cartaz</option>
                            <option value="3">Fora de exibição</option>
                        </select>
                    </div>
                </div>
            </div> -->
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