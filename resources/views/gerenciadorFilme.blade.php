@extends('padrao')

@section('content')
<form method="get" action="{{route('gerenciar-filme')}}">
    <div class="my-3 row">
        <label for="inputPesquisar" class="col-sm-2 col-form-label">Pesquisar:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="nomeFilme" id="inputPesquisar" placeholder="Digite o nome do filme">
        </div>
        <div class="col-sm-2">
        <button type="submit" class="btn btn-outline-info">Pesquisar</button>
        </div>
    </div>
</form>

<div class="container mt-3">
<table class="table table-dark table-hover">
    <thead>
        <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">Atores</th>
        <th scope="col">Data de lançamento</th>
        <th scope="col">Sinopse</th>
        <th scope="col">Alterar</th>
        <th scope="col">Excluir</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dadosfilme as $dadosfilmes)
        <tr>
        <th scope="row">{{$dadosfilmes->id}}</th>
        <td>{{$dadosfilmes->nomeFilme}}</td>
        <td>{{$dadosfilmes->atoresFilme}}</td>
        <td>{{$dadosfilmes-> dataLancamentoFilme}}</td>
        <td>{{$dadosfilmes->sinopseFilme}}</td>

        <td>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Alterar-{{$dadosfilmes->id}}">
            Alterar
            </button>
        </td>
        <td>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Deletar-{{$dadosfilmes->id}}">
            Excluir
            </button>
        </td>
        </tr>
        <!-- Modal -->
        <div class="modal fade" id="Deletar-{{$dadosfilmes->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark text-bg-dark bs-danger-border-subtle">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Exclusão</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-dark">
                Deseja realmente excluir?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form method="post" action="{{route('apagar-filme',$dadosfilmes->id)}}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
            </div>
            </div>
        </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="Alterar-{{$dadosfilmes->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Alteraração</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-dark">
                <form method = "post" action="{{route('alterar-banco-filme',$dadosfilmes->id)}}">
                @method('put')
                @csrf
                <div class="mb-2 form-check">
                    <label for="nomeInput" class="form-label">Nome:</label>
                    <input type="text" name="nomeFilme" value="{{$dadosfilmes->nomeFilme}}" class="form-control" id="nomeInput" >
                </div>
                <div class="mb-2 form-check">
                    <label for="atoresInput" class="form-label">Atores:</label>
                    <input type="text" name="atoresFilme" value="{{$dadosfilmes->atoresFilme}}" class="form-control" id="atoresInput" >
                </div>
                <div class="mb-2 form-check">
                    <label for="dtLancInput" class="form-label">Data de lançamento:</label>
                    <input type="text" name="dataLancamentoFilme" value="{{$dadosfilmes->dataLancamentoFilme}}" class="form-control" id="dtLancInput" >
                </div>
                <div class="mb-2 form-check">
                    <label for="sinopseInput" class="form-label">Sinopse:</label>
                    <input type="text" name="sinopseFilme" value="{{$dadosfilmes->sinopseFilme}}" class="form-control" id="sinopseInput" >
                </div>
                
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
            </div>
        </div>
        </div>
        @endforeach
    </tbody>
</table>
</div>


@endsection