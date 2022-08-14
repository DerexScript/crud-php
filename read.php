<?php require_once("./src/bootstrap.php"); ?>
<?php require_once("./src/CRUD/read.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-PHP | READ</title>
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
                            <a class="nav-link" aria-current="page" href="./">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./create.php">CREATE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./read.php">READ</a>
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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if (count($person) > 0) : ?>
                        <div class="table-responsive mt-5">
                            <table class="table table-dark table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Sobrenome</th>
                                        <th scope="col">E-mail</th>
                                        <th scope="col">Telefone</th>
                                        <th scope="col">Login</th>
                                        <th scope="col">Data de nascimento</th>
                                        <th scope="col">CPF</th>
                                        <th scope="col">Sexo</th>
                                        <th scope="col">Nome da mãe</th>
                                        <th scope="col">Nome do pai</th>
                                        <th scope="col">Endereço</th>
                                        <th scope="col">Numero da casa</th>
                                        <th scope="col">Bairro</th>
                                        <th scope="col">Cidade</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">CEP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($person as $key => $people) : ?>
                                        <tr>
                                            <th scope="row"><?php echo htmlspecialchars($people->id, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></th>
                                            <td><?php echo htmlspecialchars($people->name, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></td>
                                            <td><?php echo htmlspecialchars($people->surname, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></td>
                                            <td><?php echo htmlspecialchars($people->email, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></td>
                                            <td><?php echo htmlspecialchars($people->telphone, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></td>
                                            <td><?php echo htmlspecialchars($people->login, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></td>
                                            <td><?php echo htmlspecialchars($people->birth_date, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></td>
                                            <td><?php echo htmlspecialchars($people->cpf, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></td>
                                            <td><?php echo htmlspecialchars($people->gender, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></td>
                                            <td><?php echo htmlspecialchars($people->mother_name, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></td>
                                            <td><?php echo htmlspecialchars($people->father_name, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></td>
                                            <td><?php echo htmlspecialchars($people->address, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></td>
                                            <td><?php echo htmlspecialchars($people->address_number, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></td>
                                            <td><?php echo htmlspecialchars($people->district, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></td>
                                            <td><?php echo htmlspecialchars($people->city, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></td>
                                            <td><?php echo htmlspecialchars($people->state, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></td>
                                            <td><?php echo htmlspecialchars($people->zip_code, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php else : ?>
                        <div class="alert alert-warning mt-5" role="alert">
                            Você ainda não possui nenhum cadastro, acesse a pagina de <a href="./create.php">cadastro</a> para realizar um novo cadastro!
                        </div>
                    <?php endif; ?>
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