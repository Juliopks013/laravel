@extends('_partials/body')

@section('conteudo')

    <div class="login-section">
      <h2>Login</h2>
      <form>
        <div class="mb-3">
          <input type="email" class="form-control" placeholder="E-mail" required>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" placeholder="Senha" required>
        </div>
        <button type="submit" class="btn-login">Entrar</button>
        <div class="register-link">
          Não tem uma conta? <a href="{{ route('registrar') }}">Registre-se aqui</a>
        </div>
      </form>
    </div>

@endsection