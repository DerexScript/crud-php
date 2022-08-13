<?php
require_once(__DIR__ . "/../connection.php");
require_once(__DIR__ . "/../createTable.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['telphone']) && isset($_POST['login']) && isset($_POST['birthDate']) && isset($_POST['cpf']) && isset($_POST['gender']) && isset($_POST['motherName']) && isset($_POST['fatherName']) && isset($_POST['address']) && isset($_POST['addressNumber']) && isset($_POST['district']) && isset($_POST['city']) && isset($_POST['state']) && isset($_POST['zipCode'])) {
    $tableName = "people";
    try {
        //insere os dados
        $query = "INSERT INTO $tableName (name, surname, email, telphone, login, birth_date, cpf, gender, mother_name, father_name, address, address_number, district, city, state, zip_code) VALUES (:name, :surname, :email, :telphone, :login, :birth_date, :cpf, :gender, :mother_name, :father_name, :address, :address_number, :district, :city, :state, :zip_code);";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(":name", $_POST['name'], PDO::PARAM_STR);
        $stmt->bindValue(":surname", $_POST['surname'], PDO::PARAM_STR);
        $stmt->bindValue(":email", $_POST['email'], PDO::PARAM_STR);
        $stmt->bindValue(":telphone", $_POST['telphone'], PDO::PARAM_STR);
        $stmt->bindValue(":login", $_POST['login'], PDO::PARAM_STR);
        $stmt->bindValue(":birth_date", $_POST['birthDate'], PDO::PARAM_STR);
        $stmt->bindValue(":cpf", $_POST['cpf'], PDO::PARAM_STR);
        $stmt->bindValue(":gender", $_POST['gender'], PDO::PARAM_STR);
        $stmt->bindValue(":mother_name", $_POST['motherName'], PDO::PARAM_STR);
        $stmt->bindValue(":father_name", $_POST['fatherName'], PDO::PARAM_STR);
        $stmt->bindValue(":address", $_POST['address'], PDO::PARAM_STR);
        $stmt->bindValue(":address_number", $_POST['addressNumber'], PDO::PARAM_STR);
        $stmt->bindValue(":district", $_POST['district'], PDO::PARAM_STR);
        $stmt->bindValue(":city", $_POST['city'], PDO::PARAM_STR);
        $stmt->bindValue(":state", $_POST['state'], PDO::PARAM_STR);
        $stmt->bindValue(":zip_code", $_POST['zipCode'], PDO::PARAM_STR);
        $insert = $stmt->execute();
        if ($insert) {
            header("location: ../../read.php");
            exit;
        }
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
        exit;
    }
}
