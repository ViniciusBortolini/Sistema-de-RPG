@extends('layout')
@section('personagemListar')

<h1>Lista de Personagens</h1>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Idade</th>
                <th>Forca</th>
                <th>Vitalidade</th>
                <th>Destreza</th>
                <th>Poder</th>
                <th>Arma Primária</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personagens as $personagem)
            <tr>
                <td>{{ $personagem->id }}</td>
                <td>{{ $personagem->nome }}</td>
                <td>{{ $personagem->descricao }}</td>
                <td>{{ $personagem->idade }}</td>
                <td>{{ $personagem->forca }}</td>
                <td>{{ $personagem->vitalidade }}</td>
                <td>{{ $personagem->destreza }}</td>
                <td>{{ $personagem->poder }}</td>
                <td>{{ $personagem->armaPrimaria->nome }}</td>
                <td>
                    <a class="btn btn-warning" href="{{
                    route('personagem.atualiza', ['id' => $personagem->id]) }}">Alterar</a>
                    <a class="btn btn-danger" href="#" onclick="exclui({{ $personagem->id }})">Excluir</a>

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary" href="{{ route('home')}}"> Cadastrar Novo </a>
</div>

<!-- Adicionando Bootstrap JS e jQuery (necessários para alguns recursos do Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    function exclui(id) {
        if (confirm('Deseja excluir o usuário de id: ' + id + '?')) {
            location.href = '/personagem/excluir/' + id;
        }
    }
</script>
@endsection