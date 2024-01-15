<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Personagem</title>
  <!-- Adicionando Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCadastrar" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Cadastrar
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownCadastrar">
            <a class="dropdown-item" href="{{route('home')}}">Personagens</a>
            <a class="dropdown-item" href="#">Armas</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownVisualizar" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Visualizar
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownVisualizar">
            <a class="dropdown-item" href="{{route('personagem.listar')}}">Personagens</a>
            <a class="dropdown-item" href="#">Armas</a>
          </div>
        </li>
    </div>
  </nav>
  <div class="container mt-4 custom-form">
    @yield('personagemCadastrar')
    @yield('personagemListar')
    @yield('personagemAlterar')
  </div>

  <!-- Adicionando Bootstrap JS e jQuery (necessários para alguns recursos do Bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha384-pzjw8Y+u9dLwPEmFVgTpWuAjz/kdmCzfnLl5Nlb4lRa9R/6d1JDaC1/E49Ob/i9Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>

</body