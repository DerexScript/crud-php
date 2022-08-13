<?php
require_once(__DIR__ . "/connection.php");
$tableName = "people";
//cria a table caso ela não exista
try {
    $sql = "CREATE TABLE IF NOT EXISTS `" . $tableName . "` (";
    $sql .= "id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,";
    $sql .= "name varchar(80) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= "surname varchar(80) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= "email varchar(80) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= "telphone varchar(80) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= "login varchar(80) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= "birth_date datetime NOT NULL,";
    $sql .= "cpf varchar(80) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= "gender varchar(80) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= "mother_name varchar(80) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= "father_name varchar(80) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= "address varchar(80) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= "address_number varchar(80) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= "district varchar(80) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= "city varchar(80) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= "state varchar(80) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= "zip_code varchar(80) NOT NULL COLLATE utf8mb4_unicode_ci";
    $sql .= ")ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
    exit;
}
