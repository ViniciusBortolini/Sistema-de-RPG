<!DOCTYPE html>
<html lang="en">

@extends('layout')
@section('personagemCadastrar')

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
  <form id="personagemForm" method="post" action="{{ route('personagem.novo') }}">
    @csrf
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
    </div>
    <div class="form-group">
        <label for="idade">Idade:</label>
        <input type="number" class="form-control" id="idade" name="idade" placeholder="Digite sua idade" required>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" id="descricao" rows="3" name="descricao" placeholder="Digite uma descrição" required></textarea>
    </div>
    <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="forca">Força:</label>
                    <input type="number" class="form-control" id="forca" placeholder="Força" name="forca" min="1" value="1" onchange="atualizarPontos('Forca')">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="vitalidade">Vitalidade:</label>
                    <input type="number" class="form-control" id="vitalidade" placeholder="Vitalidade" name="vitalidade" min="1" value="1" onchange="atualizarPontos('Vitalidade')">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="destreza">Destreza:</label>
                    <input type="number" class="form-control" id="destreza" placeholder="Destreza" min="1" name="destreza" value="1" onchange="atualizarPontos('Destreza')">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="poder">Poder:</label>
                    <input type="number" class="form-control" id="poder" placeholder="Poder" min="1" name="poder" value="1" onchange="atualizarPontos('Poder')">
                </div>
            </div>
        </div>

    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="pontos-disponiveis">Pontos Disponíveis: <span id="pontos">10</span></label>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="armaPrimaria">Arma Primária:</label>
            <select class="form-control" name="id_arma_primaria">
                @foreach($armas as $arma)
                    <option value="{{ $arma->id }}">{{ $arma->nome }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary custom-button" id="botao" disabled>Cadastrar</button>
</form>

    </div>

    <!-- Adicionando Bootstrap JS e jQuery (necessários para alguns recursos do Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>

        var copyforca = 1, copyvitalidade = 1, copydestreza = 1, copypoder = 1;
        // Função para atualizar os pontos disponíveis e habilitar/desabilitar o botão de cadastro

        function atualizarPontos(campo, input) {
            var pontosDisponiveis = 14;
            var forca = parseInt(document.getElementById('forca').value) || 0;
            var vitalidade = parseInt(document.getElementById('vitalidade').value) || 0;
            var destreza = parseInt(document.getElementById('destreza').value) || 0;
            var poder = parseInt(document.getElementById('poder').value) || 0;

            var totalPontosGastos = forca + vitalidade + destreza + poder;

            var pontosRestantes = pontosDisponiveis - totalPontosGastos;

            const urlParams = new URLSearchParams(window.location.search);
            const id = urlParams.get('per');
            //alert("Personagem: " + id);

            if (pontosRestantes < 0) {
                // Se os pontos restantes são insuficientes, restaura os valores anteriores
                document.getElementById('forca').value = copyforca;
                document.getElementById('vitalidade').value = copyvitalidade;
                document.getElementById('destreza').value = copydestreza;
                document.getElementById('poder').value = copypoder;

                alert("Seu número de pontos disponíveis é insuficiente para aumentar o atributo neste valor!");
            } else {
                // Atualiza as cópias apenas se há pontos suficientes
                copyforca = forca;
                copyvitalidade = vitalidade;
                copydestreza = destreza;
                copypoder = poder;
            }

            if (pontosRestantes < 1) {
                document.getElementById('pontos').innerText = 0;
                document.getElementById("botao").disabled = false;

            } else {
                document.getElementById('pontos').innerText = pontosRestantes;
                document.getElementById("botao").disabled = true;
            }
        }

    </script>

    @endsection