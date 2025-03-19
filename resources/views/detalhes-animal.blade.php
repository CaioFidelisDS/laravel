<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do Animal - Adote um Amigo</title>
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
      .animal-details {
        background-color: #008F8C;
        padding: 2rem;
        border-radius: 0.5rem;
        margin-top: 2rem;
      }
      .animal-details img {
        border-radius: 0.5rem;
        width: 100%;
        height: auto;
        max-height: 400px;
        object-fit: cover;
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
              <a class="nav-link" href="index.html">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre Nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="animais.html">Animais para Adoção</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="animal-details">
            <!-- Foto realista de um cachorro vira-lata -->
            <img src="https://images.unsplash.com/photo-1554692918-08fa0fdc9db3?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Rex">
            <h2 class="mt-4">Rex</h2>
            <p><strong>Idade:</strong> 2 anos</p>
            <p><strong>Raça:</strong> Vira-lata</p>
            <p><strong>Sexo:</strong> Macho</p>
            <p><strong>Porte:</strong> Médio</p>
            <p><strong>Localização:</strong> São Paulo, SP</p>
            <p><strong>Descrição:</strong> Rex é um cachorro muito brincalhão e adora crianças. Ele é muito sociável e se dá bem com outros animais. Rex está procurando um lar onde possa receber muito carinho e atenção. Ele é vacinado, castrado e está pronto para fazer parte de uma família amorosa.</p>
            <div class="mt-4">
              <a href="#" class="btn btn-primary">Adotar</a>
              <a href="animais.html" class="btn btn-secondary">Voltar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer text-center fixed-bottom">
      <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>