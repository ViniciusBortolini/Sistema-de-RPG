@extends('layout')
@section('armaListar')

<h1>Lista de Armas</h1>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Dano</th>
                <th>Defesa</th>
                <th>Peso</th>
                <th>Tipo</th>
                <th>Estilo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($armas as $arma)
            <tr>
                <td>{{ $arma->id }}</td>
                <td>{{ $arma->nome }}</td>
                <td>{{ $arma->dano }}</td>
                <td>{{ $arma->defesa }}</td>
                <td>{{ $arma->peso }} Kg</td>
                <td>{{ $arma->tipo }}</td>
                <td>@if($arma->estilo == 0)
                    Secundária
                    @elseif($arma->estilo == 1)
                    Primária
                    @endif</td>
                <td>
                    <a class="btn btn-warning" href="{{
                    route('arma.atualiza', ['id' => $arma->id]) }}">Alterar</a>
                    <a class="btn btn-danger" href="#" onclick="exclui({{ $arma->id }})">Excluir</a>

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary" href="{{ route('arma.cadastro')}}"> Cadastrar Novo </a>
</div>

<!-- Adicionando Bootstrap JS e jQuery (necessários para alguns recursos do Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    function exclui(id) {
        if (confirm('Deseja excluir a arma de id: ' + id + '?')) {
            location.href = '/arma/excluir/' + id;
        }
    }
</script>
@endsection