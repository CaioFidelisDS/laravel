@extends('_partials/main')
@section('conteudo')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="register-container">
            <h2 class="text-center">Registro</h2>
            <form action="{{ route('registro') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="name" name="nome_completo" placeholder="Digite seu nome completo" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="senha" placeholder="Digite sua senha" required>
              </div>
              <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirme sua Senha</label>
                <input type="password" class="form-control" id="confirm-password"  name="confirmar_senha" placeholder="Confirme sua senha" required>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
              <div class="text-center mt-3">
                <p>Já tem uma conta? <a href="/login" class="text-light">Faça login</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
