<?php
require_once(__DIR__ . "/../connection.php");
require_once(__DIR__ . "/../createTable.php");
$tableName = "people";

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == "delete") {
    try {
        $query = "DELETE FROM $tableName WHERE id = :id;";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(":id", intval($_GET['id']), PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            header("location: ../../delete.php");
            exit;
        }
        header("location: ../../delete.php");
        exit;
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
        exit;
    }
}

$query = "SELECT * FROM $tableName;";
$stmt = $conn->prepare($query);
$stmt->execute();
$person = [];
if ($stmt->rowCount()) {
    $person = $stmt->fetchAll(PDO::FETCH_OBJ);
}
