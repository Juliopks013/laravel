@extends('_partials/body')

@section('conteudo')

    <div class="register-section">
      <h2>Registrar</h2>
      <form>
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Nome completo" required>
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" placeholder="E-mail" required>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" placeholder="Senha" required>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" placeholder="Confirmar senha" required>
        </div>
        <button type="submit" class="btn-register">Criar conta</button>
        <div class="login-link">
          Já tem uma conta? <a href="{{ route('login') }}">Faça login aqui</a>
        </div>
      </form>
    </div>

@endsection