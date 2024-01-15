<!DOCTYPE html>
<html lang="en">

@extends('layout')
@section('armaCadastrar')

<head>

    <style>
        body {
            background: no-repeat center center fixed url({{asset('/assets/img/fundo.png')}}) ;
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

        h1 {
            font-weight: bold;
            color: #000000;
        }
        
    </style>

</head>

<body>
    <h1>Cadastro de Arma</h1>
    <form id="armaForm" method="post" action="{{ route('arma.novo') }}">
        @csrf
        <div class="row">
        <div class="col-md-6">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome da arma">
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Digite o tipo da arma">
            </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="dano">Dano:</label>
                    <input type="number" class="form-control" id="dano" name="dano"
                        placeholder="Digite o dano da arma">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="defesa">Defesa:</label>
                    <input type="number" class="form-control" id="defesa" name="defesa"
                        placeholder="Digite a defesa da arma">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="peso">Peso:</label>
                    <input type="number" class="form-control" id="peso" name="peso" placeholder="Digite o peso da arma">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="estilo">Estilo:</label>
                        <select class="form-control" name="estilo">
                            <option value="1">Primária</option>
                            <option value="0">Secundária</option>

                        </select>
                    </div>
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