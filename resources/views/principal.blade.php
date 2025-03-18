<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adoção de Animais - ChiquePets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #F2DBD5;
        color: #5C4B51;
      }
      .navbar {
        background-color: #D9B2A9 !important;
      }
      .navbar-brand, .nav-link {
        color: #5C4B51 !important;
      }
      .card {
        background-color: #A5A68F;
        border: none;
        margin-bottom: 20px;
      }
      .card-title {
        color: #5C4B51;
      }
      .card-text {
        color: #5C4B51;
      }
      .btn-primary {
        background-color: #D9B2A9;
        border-color: #D9B2A9;
        color: #5C4B51;
      }
      .btn-primary:hover {
        background-color: #A5A68F;
        border-color: #A5A68F;
      }
    </style>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">ChiquePets</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('principal') }}">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('registrar') }}">Registrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-5">
      <h1 class="text-center mb-4">Animais para Adoção</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://static5.depositphotos.com/1004592/416/i/450/depositphotos_4165716-stock-photo-golden-retriever.jpg" class="card-img-top" alt="Cachorro">
            <div class="card-body">
              <h5 class="card-title">Rex</h5>
              <p class="card-text">Rex é um cachorro muito brincalhão e cheio de energia. Ele adora correr e brincar com bolinhas.</p>
              <div class="text-center">
                <a href="#" class="btn btn-primary">Adotar</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://d1muf25xaso8hp.cloudfront.net/https://img.criativodahora.com.br/2024/02/criativo-65bc15ca4aeb9MDEvMDIvMjAyNCAxOWgwNg==.jpg?w=1000&h=&auto=compress&dpr=1&fit=max" class="card-img-top" alt="Gato">
            <div class="card-body">
              <h5 class="card-title">Mimi</h5>
              <p class="card-text">Mimi é uma gatinha muito carinhosa e tranquila. Ela adora um colo e um carinho.</p>
              <div class="text-center">
                <a href="#" class="btn btn-primary">Adotar</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://d1muf25xaso8hp.cloudfront.net/https://img.criativodahora.com.br/2024/02/criativo-65bc1570c2ac8MDEvMDIvMjAyNCAxOWgwNA==.jpg?w=1000&h=&auto=compress&dpr=1&fit=max" class="card-img-top" alt="Coelho">
            <div class="card-body">
              <h5 class="card-title">Bolinha</h5>
              <p class="card-text">Bolinha é um coelho muito dócil e brincalhão. Ele adora cenouras e brincar no jardim.</p>
              <div class="text-center">
                <a href="#" class="btn btn-primary">Adotar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>