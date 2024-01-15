<!DOCTYPE html>
<html lang="en">

@extends('layout')
@section('personagemAlterar')

<head>

    <style>
        body {
            background: url({{asset('/assets/img/fundo.png')}}) no-repeat center center fixed;
        background-size: cover;
        font-family: 'Goudy Bookletter 1911',
        sans-serif;
        color: #ffffff;
        height: 100%;
        margin: 0;
        }

        .custom-form {
            padding: 20px;
            border-radius: 10px;
            margin-top: 500px;
            overflow-y: auto;
        }

        .custom-form label {
            font-weight: bold;
            color: #000000;
        }

        .custom-button {
            background-color: #8b4513;
            border: none;
            margin-top: 10px;
        }

        .custom-button:hover {
            background-color: #cd853f;
        }

        #pontos-disponiveis {
            font-weight: bold;
            color: #000000;
        }
    </style>

</head>
<body>
  <form id="personagemForm" method="post" action="{{ route('personagem.alterar' , ['id' => $personagem->id]) }}">
    @csrf
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ $personagem ->nome }}">
    </div>
    <div class="form-group">
        <label for="idade">Idade:</label>
        <input type="number" class="form-control" id="idade" name="idade" value="{{ $personagem ->idade }}">
    </div>
    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" id="descricao" rows="3" name="descricao">{{ $personagem->descricao }}</textarea>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="armaPrimaria">Arma Primária:</label>
            <select class="form-control" name="id_arma_primaria">
                @foreach($armas as $arma)
                    <option value="{{ $arma->id }}" {{ $arma->id == $personagem->id_arma_primaria ? 'selected' : '' }}>
                    {{ $arma->nome }}
                </option>
                @endforeach
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary custom-button" id="botao">Cadastrar</button>
</form>

    </div>
    <!-- Adicionando Bootstrap JS e jQuery (necessários para alguns recursos do Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    @endsection