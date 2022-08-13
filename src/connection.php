<?php
require_once(__DIR__ . "/../config.php");
try {
    $conn = new PDO("mysql:host=$config[dbHost];dbname=$config[dbName];port=$config[dbPort];charset=utf8", $config['dbUser'], $config['dbPassword'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
