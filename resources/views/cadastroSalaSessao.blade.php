@extends('padrao')

@section('content')
<link rel="stylesheet" href="./style/sessao.css">
<div class="row justify-content-center align-items-center" style="width: 100vw">
    <div class="col-5">
        <form method="post" action="{{route('cadastro-salasessao')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <h2 class="mb-3">Sala</h2>
                <div class="col-12">
                    <div class="input-group mb-3 ">
                        <label class="input-group-text" for="inputGroupNomeFilme">Filme</label>
                        <select class="form-select bs-danger-text-emphasis" name="nomeFilme"
                            aria-label="Default select example" id="inputGroupNomeFilme">
                            <option selected disabled value="">...</option>
                            @foreach($dadosfilme as $dadosfilmes)
                            <option value="{{$dadosfilmes->nomeFilme}}">{{$dadosfilmes->nomeFilme}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3 ">
                        <label class="input-group-text" for="inputGroupQtPolt">Poltronas</label>
                        <select class="form-select bs-danger-text-emphasis" name="qtPolt"
                            aria-label="Default select example" id="inputGroupQtPolt">
                            <option selected value="100">10x10</option>
                            <option value="96">12x8</option>
                            <option value="80">8x10</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3 ">
                        <label for="numeroSala" class="input-group-text">Nº da Sala</label>
                        <input type="number" min="1" max="25" name="numSala" class="form-control" id="numeroSala">
                    </div>
                </div>

                <h2 class="mb-3">Sessão</h2>

                <div class="col-6">
                    <div class="input-group mb-3 ">
                        <label for="timeSessao" class="input-group-text">Horário</label>
                        <input type="time" min="1" max="25" name="timeSessao" class="form-control" id="timeSessao">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3 ">
                        <label for="dateSessao" class="input-group-text">Data</label>
                        <input type="date" min="1" max="25" name="dateSessao" class="form-control" id="dateSessao">
                    </div>
                </div>
                <hr />
                <button type="submit" class="btn btn-primary col">Salvar</button>
            </div>
        </form>
    </div>
</div>

<script>
    function readImageCapa() {
        if (this.files && this.files[0]) {
            var file = new FileReader();
            file.onload = function (e) {
                document.getElementById("imgCapa").src = e.target.result;
            };
            file.readAsDataURL(this.files[0]);
        }
    }

    function readImageBanner() {
        if (this.files && this.files[0]) {
            var file = new FileReader();
            file.onload = function (e) {
                document.getElementById("imgBanner").src = e.target.result;
            };
            file.readAsDataURL(this.files[0]);
        }
    }
    document.getElementById("capaInput").addEventListener("change", readImageCapa, false);

    document.getElementById("bannerInput").addEventListener("change", readImageBanner, false);
</script>
@endsection