<?php require_once("./src/bootstrap.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD-PHP | HOME</title>
  <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="./assets/img/favicon.png">
  <style>
    body {
      background-color: #000000d6;
    }
  </style>
</head>

<body class="d-flex flex-column min-vh-100">
  <header>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="./">CRUD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./create.php">CREATE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./read.php">READ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./update.php">UPDATE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./delete.php">DELETE</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section>
    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-sm-6 mt-2">
          <div class="card bg-dark">
            <div class="card-body">
              <h5 class="card-title text-gray-900 text-white">Create</h5>
              <p class="card-text text-white">Criar algo no banco de dados!</p>
              <a href="./create.php" class="btn btn-primary">Criar</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mt-2">
          <div class="card bg-dark">
            <div class="card-body">
              <h5 class="card-title text-gray-900 text-white">Read</h5>
              <p class="card-text text-white">Ler o que tiver no banco de dados!</p>
              <a href="./read.php" class="btn btn-primary">Ler</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mt-2">
          <div class="card bg-dark">
            <div class="card-body">
              <h5 class="card-title text-gray-900 text-white">Update</h5>
              <p class="card-text text-white">Atualize algo cadastrado no banco de dados!</p>
              <a href="./update.php" class="btn btn-primary">Atualizar</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mt-2">
          <div class="card bg-dark">
            <div class="card-body">
              <h5 class="card-title text-gray-900 text-white">Delete</h5>
              <p class="card-text text-white">Deletar Algo Cadastrado no banco de dados!</p>
              <a href="./delete.php" class="btn btn-primary">Deletar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer class="mt-auto bg-dark navbar-dark footer mt-5">
    <div class="container mt-3">
      <div class="row">
        <div class="col-12">
          <ul class="list-unstyled">
            <li class="text-white"><a class="text-decoration-none link-light" href="https://github.com/DerexScript/crud-php" target="_blank">Repositório do
                projeto</a></li>
          </ul>
        </div>
      </div>
      <div class="bg-white">
        <hr class="bg-white">
      </div>
      <div class="row mb-1">
        <div class="col-12 d-flex justify-content-center">
          <span class="text-white">© 2021 - <?php echo date('Y'); ?>, Inc</span>
        </div>
      </div>
    </div>
  </footer>

  <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>