@extends('_partials/main')
@section('conteudo')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="register-container">
            <h2 class="text-center">Registro Animal</h2>
            <form action="{{ route('registro-animal') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nome Completo do animal</label>
                <input type="text" class="form-control" id="name" name="nome" placeholder="Digite seu nome completo" required>
              </div>
              <div class="mb-3">
                <label for="cor" class="form-label">Cor</label>
                <input type="text" class="form-control" id="cor" name="cor" placeholder="Digite a cor" required>
              </div>
              <div class="mb-3">
                <label for="peso" class="form-label">Peso</label>
                <input type="text" class="form-control" id="peso" name="peso" placeholder="Digite o peso" required>
              </div>
              <div class="mb-3">
                <label for="idade" class="form-label">Idade</label>
                <input type="text" class="form-control" id="idade" name="idade" placeholder="Digite a idade" required>
              </div>
              <div class="mb-3">
                <label for="especie" class="form-label">Especie</label>
                <input type="text" class="form-control" id="especie" name="especie" placeholder="Digite especie" required>
              </div>
              <div class="mb-3">
                <label for="raca" class="form-label">Raca</label>
                <input type="text" class="form-control" id="raca" name="raca" placeholder="Digite a raca" required>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
