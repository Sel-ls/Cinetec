<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CineTec - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap">

  <link rel="icon" href="./img/cadeira.png" type="image/x-icon">
</head>
<body style="height: 100vh">
  <header class="mb-5">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #FAFAFA;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="./img/CINETEC.png" alt="Logo" width="40%" height="40%" class="d-inline-block align-text-top me-2"
            style="margin-left: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto ">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">
                <i class="bi bi-house-fill me-1"></i>
                Início
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./carrinho.html">
                <i class="bi bi-person-fill me-1"></i>
                Carrinho
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                catégorias
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Ação</a></li>
                <li><a class="dropdown-item" href="#">Aventura</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Outros</a></li>
              </ul>
            </li>
          </ul>
          <div class="d-flex">
            <a class="btn btn-outline-light me-2" href="./cadastro.html">Login</a>
          </div>
          <div class="d-flex">
            <a class="btn btn-outline-light me-2" href="./cadastro.html">Cadastrar</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

    @yield('content')

  <footer class="d-flex flex-wrap justify-content-between align-items-center py-4 mt-4 border-top position-static bottom-0"
    style="background-color: #F5F5F5;">
    <p class="col-md-4 mb-0" style="color: #ff0000;">&copy; 2023 CineTec, Inc</p>
    <a href="#"
      class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <img src="./img/CINETEC.png" alt="Logo" width="30%" style="margin-left: 20px;">
    </a>
    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="{{url('/')}}" class="nav-link px-2">Filmes</a></li>
      <li class="nav-item"><a href="{{url('/cadastro-filme')}}" class="nav-link px-2">FilmesCadastro</a></li>
      <li class="nav-item"><a href="{{url('/cadastro-salasessao')}}" class="nav-link px-2">SalaSessãoCadastro</a></li>
      <li class="nav-item"><a href="./carrinho.html" class="nav-link px-2">Carrinho</a></li>
      <li class="nav-item"><a href="./cadastro.html" class="nav-link px-2">Login/Cadastrar</a></li>
    </ul>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>
</html>