<?php
require_once(__DIR__ . "/../connection.php");
require_once(__DIR__ . "/../createTable.php");
$tableName = "people";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['telphone']) && isset($_POST['login']) && isset($_POST['birthDate']) && isset($_POST['cpf']) && isset($_POST['gender']) && isset($_POST['motherName']) && isset($_POST['fatherName']) && isset($_POST['address']) && isset($_POST['addressNumber']) && isset($_POST['district']) && isset($_POST['city']) && isset($_POST['state']) && isset($_POST['zipCode'])) {
    try {
        $query = "UPDATE $tableName SET name = :name, surname = :surname, email = :email, telphone = :telphone, login = :login, birth_date = :birth_date, cpf = :cpf, gender = :gender, mother_name = :mother_name, father_name = :father_name, address = :address, address_number = :address_number, district = :district, city = :city, state = :state, zip_code = :zip_code WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(":id", $_POST['id'], PDO::PARAM_STR);
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
        $stmt->execute();
        //redireciona para update
        header("location: ../../update.php");
        exit;
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
}


$query = "SELECT * FROM $tableName;";
$stmt = $conn->prepare($query);
$stmt->execute();
$person = [];
if ($stmt->rowCount()) {
    $person = $stmt->fetchAll(PDO::FETCH_OBJ);
}

$people = new stdClass();
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == "update") {
    $people = array_filter($person, function ($item) {
        return $item->id == $_GET['id'];
    });
    $people = $people[array_keys($people)[0]];
}
