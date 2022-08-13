<?php if (!file_exists("./config.php")) : ?>
    <?php
    if (
        $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dbHost']) && isset($_POST['dbPort']) && isset($_POST['dbName']) && isset($_POST['dbUser']) && isset($_POST['dbPassword']) &&
        !empty($_POST['dbHost']) && !empty($_POST['dbName']) && !empty($_POST['dbUser'])
    ) {
        //abre conexão com o banco de dados;
        $conn = null;
        try {
            $conn = new PDO("mysql:host=$_POST[dbHost];port=$_POST[dbPort];charset=utf8", $_POST['dbUser'], $_POST['dbPassword'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"));
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            exit;
        }
        //verifica se o db existe, se não existir então criar-lo
        try {
            $query = "SHOW DATABASES LIKE '$_POST[dbName]';";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            if ($stmt->rowCount() <= 0) {
                $query = "CREATE DATABASE IF NOT EXISTS `$_POST[dbName]` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";
                $stmt = $conn->prepare($query);
                $stmt->execute();
            }
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            exit;
        }
        //cria arquivo de configuração
        $configFileContent = "<?php\n\n//database settings\n\$config['dbHost'] =     '$_POST[dbHost]';\n\$config['dbPort'] =     '$_POST[dbPort]';\n\$config['dbName'] =     '$_POST[dbName]';\n\$config['dbUser'] =     '$_POST[dbUser]';\n\$config['dbPassword'] = '$_POST[dbPassword]';";
        $configFile = fopen("./config.php", "w") or die("Verifique se o projeto tem permissão para criar novos arquivos em seu servidor!");
        fwrite($configFile, $configFileContent);
        fclose($configFile);
        //redireciona para pagina inicial do projeto
        header("location: ./");
        exit;
    }
    ?>
    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD-PHP | INSTALL</title>
        <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" href="./assets/img/favicon.png">
        <style>
            body {
                background-color: #56535373;
            }
        </style>
    </head>

    <body>
        <section>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center h1">Configuração</div>
                        <form action="./" method="POST">
                            <fieldset class="border p-2 border-1 border-dark">
                                <legend>Database</legend>
                                <div class="mb-3">
                                    <label for="inputHost" class="form-label">Host</label>
                                    <input type="text" class="form-control" name="dbHost" id="inputHost" aria-describedby="dbHostHelp" required>
                                    <div id="dbHostHelp" class="form-text">Informe o host do seu banco de dados!</div>
                                </div>
                                <div class="mb-3">
                                    <label for="inputPort" class="form-label">Porta</label>
                                    <input type="number" class="form-control" name="dbPort" id="inputPort" aria-describedby="dbHostPort" value="3306">
                                    <div id="dbHostPort" class="form-text">Informe a porta do seu banco de dados, porta padrão do mysql e maria db : 3306</div>
                                </div>
                                <div class="mb-3">
                                    <label for="inputDbName" class="form-label">Nome do banco</label>
                                    <input type="text" class="form-control" name="dbName" id="inputDbName" aria-describedby="dbNameHelp" required>
                                    <div id="dbNameHelp" class="form-text">Informe o nome do seu banco de dados!</div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="inputDbUser">Usuario</label>
                                    <input type="text" class="form-control" name="dbUser" id="inputDbUser" aria-describedby="dbUserHelp" required>
                                    <div id="dbUserHelp" class="form-text">Informe o user do seu banco de dados!</div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="inputDbPassword">Senha</label>
                                    <input type="text" class="form-control" name="dbPassword" id="inputDbPassword" aria-describedby="dbPasswordHelp">
                                    <div id="dbPasswordHelp" class="form-text">Informe a senha do seu banco de dados!</div>
                                </div>
                            </fieldset>
                            <div class="d-grid gap-2 mt-1">
                                <button class="btn btn-outline-primary" type="submit">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
<?php endif; ?>