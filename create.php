<?php require_once("./src/bootstrap.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-PHP | CREATE</title>
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
                            <a class="nav-link active" aria-current="page" href="./create.php">CREATE</a>
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
                <div class="col-md-12">
                    <form class="row" action="./src/CRUD/create.php" method="POST">
                        <div class="mb-3 col-md-6">
                            <label for="inputName" class="form-label text-white">Nome</label>
                            <input type="text" class="form-control" id="inputName" name="name" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputSurname" class="form-label text-white">Sobrenome</label>
                            <input type="text" class="form-control" id="inputSurname" name="surname" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputEmail" class="form-label text-white">E-mail</label>
                            <input type="text" class="form-control" id="inputEmail" name="email" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputTelphone" class="form-label text-white">Telefone</label>
                            <input type="text" class="form-control" id="inputTelphone" name="telphone" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputLogin" class="form-label text-white">Login</label>
                            <input type="text" class="form-control" id="inputLogin" name="login" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputBirthDate" class="form-label text-white">Data de nascimento</label>
                            <input type="text" class="form-control" id="inputBirthDate" name="birthDate" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputCPF" class="form-label text-white">CPF</label>
                            <input type="text" class="form-control" id="inputCPF" name="cpf" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputGender" class="form-label text-white">Sexo</label>
                            <input type="text" class="form-control" id="inputGender" name="gender" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputMotherName" class="form-label text-white">Nome da mãe</label>
                            <input type="text" class="form-control" id="inputMotherName" name="motherName" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputFatherName" class="form-label text-white">Nome do pai</label>
                            <input type="text" class="form-control" id="inputFatherName" name="fatherName" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputAddress" class="form-label text-white">Endereço</label>
                            <input type="text" class="form-control" id="inputAddress" name="address" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputAddressNumber" class="form-label text-white">Numero da casa</label>
                            <input type="text" class="form-control" id="inputAddressNumber" name="addressNumber" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputDistrict" class="form-label text-white">Bairro</label>
                            <input type="text" class="form-control" id="inputDistrict" name="district" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputCity" class="form-label text-white">Cidade</label>
                            <input type="text" class="form-control" id="inputCity" name="city" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputState" class="form-label text-white">Estado</label>
                            <input type="text" class="form-control" id="inputState" name="state" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputZipCode" class="form-label text-white">CEP</label>
                            <input type="text" class="form-control" id="inputZipCode" name="zipCode" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-primary" type="submit">Cadastrar</button>
                            <button class="btn btn-outline-secondary" type="button" id="autofill">Preencher Automaticamente</button>
                        </div>
                    </form>
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

    <script>
        const personData = [{
            "name": "Kai",
            "surname": "Costa",
            "email": "KaiCostaCavalcanti@jourrapide.com",
            "telphone": "3442535290",
            "login": "Suddeas",
            "birthDate": "1999-11-22",
            "cpf": "28055444390",
            "gender": "M",
            "motherName": "Souza Costa Cavalcanti",
            "fatherName": "Luan Costa Cavalcanti",
            "address": "Rua Cinqüenta e Nove",
            "addressNumber": "868",
            "district": "centro",
            "city": "Araxá",
            "state": "MG",
            "zipCode": "38184519"
        }, {
            "name": "Davi",
            "surname": "Barbosa",
            "email": "DaviBarbosaPinto@armyspy.com",
            "telphone": "8438082465",
            "login": "Lych1996",
            "birthDate": "1996-01-25",
            "cpf": "72906429880",
            "gender": "M",
            "motherName": "Gabriela Barbosa Pinto",
            "fatherName": "Rodrigo Barbosa Pinto",
            "address": "Rua Esperantina",
            "addressNumber": "303",
            "district": "centro",
            "city": "Natal",
            "state": "RN",
            "zipCode": "59108150"
        }, {
            "name": "Sarah",
            "surname": "Lima",
            "email": "SarahLimaSilva@dayrep.com",
            "telphone": "8659302778",
            "login": "Plecepeave",
            "birthDate": "1995-03-26",
            "cpf": "56498439530",
            "gender": "F",
            "motherName": "Thaís Lima Gomes",
            "fatherName": "Paulo Lima Gomes",
            "address": "Rua Leonel Hugueney",
            "addressNumber": "1885",
            "district": "centro",
            "city": "Cuiabá",
            "state": "MT",
            "zipCode": "78028190"
        }, {
            "name": "Rafaela",
            "surname": "Azevedo",
            "email": "RafaelaAzevedoDias@dayrep.com",
            "telphone": "1167252028",
            "login": "Beggall",
            "birthDate": "1999-01-28",
            "cpf": "90109451627",
            "gender": "F",
            "motherName": "Julia Azevedo Lima",
            "fatherName": "Murilo Azevedo Lima",
            "address": "Rua José Veríssimo",
            "addressNumber": "1215",
            "district": "centro",
            "city": "Mogi das Cruzes",
            "state": "SP",
            "zipCode": "08810290"
        }];
        document.querySelector("#autofill").addEventListener("click", evt => {
            evt.preventDefault();
            let people = personData[Math.floor(Math.random() * personData.length)];
            const inputName = document.querySelector("#inputName");
            const inputSurname = document.querySelector("#inputSurname");
            const inputEmail = document.querySelector("#inputEmail");
            const inputTelphone = document.querySelector("#inputTelphone");
            const inputLogin = document.querySelector("#inputLogin");
            const inputBirthDate = document.querySelector("#inputBirthDate");
            const inputCPF = document.querySelector("#inputCPF");
            const inputGender = document.querySelector("#inputGender");
            const inputMotherName = document.querySelector("#inputMotherName");
            const inputFatherName = document.querySelector("#inputFatherName");
            const inputAddress = document.querySelector("#inputAddress");
            const inputAddressNumber = document.querySelector("#inputAddressNumber");
            const inputDistrict = document.querySelector("#inputDistrict");
            const inputCity = document.querySelector("#inputCity");
            const inputState = document.querySelector("#inputState");
            const inputZipCode = document.querySelector("#inputZipCode");
            inputName.value = people.name;
            inputSurname.value = people.surname;
            inputEmail.value = people.email;
            inputTelphone.value = people.telphone;
            inputLogin.value = people.login;
            inputBirthDate.value = people.birthDate;
            inputCPF.value = people.cpf;
            inputGender.value = people.gender;
            inputMotherName.value = people.motherName;
            inputFatherName.value = people.fatherName;
            inputAddress.value = people.address;
            inputAddressNumber.value = people.addressNumber;
            inputDistrict.value = people.district;
            inputCity.value = people.city;
            inputState.value = people.state;
            inputZipCode.value = people.zipCode;
        });
    </script>
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>