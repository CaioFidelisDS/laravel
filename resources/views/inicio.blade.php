<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #023535;
        color: #ffffff;
      }
      .navbar {
        background-color: #015958;
      }
      .btn-primary {
        background-color: #0FC2C0;
        border-color: #0CABA8;
      }
      .btn-primary:hover {
        background-color: #0CABA8;
        border-color: #008F8C;
      }
      .jumbotron {
        background-color: #008F8C;
        padding: 2rem 1rem;
        margin-bottom: 2rem;
        border-radius: 0.3rem;
      }
      .footer {
        background-color: #015958;
        padding: 1rem 0;
        margin-top: 2rem;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Adote um Amigo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre Nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Animais para Adoção</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron text-center">
      <h1 class="display-4">Adote um Amigo</h1>
      <p class="lead">Dê um lar para um animal de rua e ganhe um companheiro para a vida toda.</p>
      <hr class="my-4">
      <p>Navegue pela nossa lista de animais disponíveis para adoção e encontre o seu novo melhor amigo.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Ver Animais</a>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Por que Adotar?</h2>
          <p>Adotar um animal de rua não só salva uma vida, mas também abre espaço para que outros animais sejam resgatados.</p>
        </div>
        <div class="col-md-4">
          <h2>Como Adotar?</h2>
          <p>O processo de adoção é simples e seguro. Basta escolher o animal, preencher o formulário e aguardar o contato.</p>
        </div>
        <div class="col-md-4">
          <h2>Ajude-nos</h2>
          <p>Se você não pode adotar, ainda pode ajudar fazendo uma doação ou divulgando nosso trabalho.</p>
        </div>
      </div>
    </div>

    <footer class="footer text-center fixed-bottom">
      <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>