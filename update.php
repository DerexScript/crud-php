<?php require_once("./src/bootstrap.php"); ?>
<?php require_once("./src/CRUD/update.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-PHP | UPDATE</title>
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
                            <a class="nav-link" aria-current="page" href="./read.php">READ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./update.php">UPDATE</a>
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
                    <?php if (count($person) > 0 && $_SERVER['REQUEST_METHOD'] === 'GET' && !isset($_GET['id']) && !isset($_GET['action'])) : ?>
                        <div class="table-responsive mt-5">
                            <table class="table table-dark table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Action</th>
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
                                            <th scope="row">
                                                <a href="./update.php?id=<?php echo htmlspecialchars($people->id, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>&action=update"><button type="button" class="btn btn-outline-primary">Editar</button></a>
                                            </th>
                                            <td><?php echo htmlspecialchars($people->id, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></td>
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
                    <?php elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == "update") : ?>
                        <form class="row mt-1" action="./src/CRUD/update.php" method="POST">
                            <div class="mb-3 col-md-6">
                                <label for="inputName" class="form-label text-white">Nome</label>
                                <input type="text" class="form-control" id="inputName" name="name" value="<?php echo htmlspecialchars($people->name, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputSurname" class="form-label text-white">Sobrenome</label>
                                <input type="text" class="form-control" id="inputSurname" name="surname" value="<?php echo htmlspecialchars($people->surname, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputEmail" class="form-label text-white">E-mail</label>
                                <input type="text" class="form-control" id="inputEmail" name="email" value="<?php echo htmlspecialchars($people->email, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputTelphone" class="form-label text-white">Telefone</label>
                                <input type="text" class="form-control" id="inputTelphone" name="telphone" value="<?php echo htmlspecialchars($people->telphone, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputLogin" class="form-label text-white">Login</label>
                                <input type="text" class="form-control" id="inputLogin" name="login" value="<?php echo htmlspecialchars($people->login, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputBirthDate" class="form-label text-white">Data de nascimento</label>
                                <input type="text" class="form-control" id="inputBirthDate" name="birthDate" value="<?php echo htmlspecialchars($people->birth_date, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputCPF" class="form-label text-white">CPF</label>
                                <input type="text" class="form-control" id="inputCPF" name="cpf" value="<?php echo htmlspecialchars($people->cpf, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputGender" class="form-label text-white">Sexo</label>
                                <input type="text" class="form-control" id="inputGender" name="gender" value="<?php echo htmlspecialchars($people->gender, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputMotherName" class="form-label text-white">Nome da mãe</label>
                                <input type="text" class="form-control" id="inputMotherName" name="motherName" value="<?php echo htmlspecialchars($people->mother_name, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputFatherName" class="form-label text-white">Nome do pai</label>
                                <input type="text" class="form-control" id="inputFatherName" name="fatherName" value="<?php echo htmlspecialchars($people->father_name, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputAddress" class="form-label text-white">Endereço</label>
                                <input type="text" class="form-control" id="inputAddress" name="address" value="<?php echo htmlspecialchars($people->address, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputAddressNumber" class="form-label text-white">Numero da casa</label>
                                <input type="text" class="form-control" id="inputAddressNumber" name="addressNumber" value="<?php echo htmlspecialchars($people->address_number, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputDistrict" class="form-label text-white">Bairro</label>
                                <input type="text" class="form-control" id="inputDistrict" name="district" value="<?php echo htmlspecialchars($people->district, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputCity" class="form-label text-white">Cidade</label>
                                <input type="text" class="form-control" id="inputCity" name="city" value="<?php echo htmlspecialchars($people->city, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputState" class="form-label text-white">Estado</label>
                                <input type="text" class="form-control" id="inputState" name="state" value="<?php echo htmlspecialchars($people->state, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputZipCode" class="form-label text-white">CEP</label>
                                <input type="text" class="form-control" id="inputZipCode" name="zipCode" value="<?php echo htmlspecialchars($people->zip_code, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" required>
                            </div>
                            <input type="hidden" class="form-control" id="inputID" name="id" value="<?php echo htmlspecialchars($people->id, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>" required>
                            <div class="d-grid gap-2">
                                <button class="btn btn-outline-primary" type="submit">Atualizar</button>
                            </div>
                        </form>
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
                        <li class="text-white"><a class="text-decoration-none link-light" href="https://github.com/DerexScript/" target="_blank">Repositório do
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