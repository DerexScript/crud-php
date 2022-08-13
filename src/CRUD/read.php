<?php
require_once(__DIR__ . "/../connection.php");
require_once(__DIR__ . "/../createTable.php");
$tableName = "people";
$query = "SELECT * FROM $tableName;";
$stmt = $conn->prepare($query);
$stmt->execute();
$person = [];
if ($stmt->rowCount()) {
    $person = $stmt->fetchAll(PDO::FETCH_OBJ);
}
