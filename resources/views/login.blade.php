<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - ChiquePets</title>
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
      .login-container {
        background-color: #A5A68F;
        border-radius: 10px;
        padding: 20px;
        margin-top: 50px;
        max-width: 400px;
        margin-left: auto;
        margin-right: auto;
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
      .form-control {
        background-color: #F2DBD5;
        border: 1px solid #D9B2A9;
      }
      .form-control:focus {
        background-color: #F2DBD5;
        border-color: #A5A68F;
        box-shadow: none;
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
              <a class="nav-link" href="{{ route('principal') }}">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('registrar') }}">Registrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="login-container">
        <h2 class="text-center mb-4">Login</h2>
        <form>
          <div class="mb-3">
            <input type="email" class="form-control" id="email" placeholder="Email" required>
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" id="senha" placeholder="Senha" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Entrar</button>
          </div>
          <div class="text-center mt-3">
            <a href="#" class="text-decoration-none" style="color: #5C4B51;">Esqueceu a senha?</a>
          </div>
        </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>