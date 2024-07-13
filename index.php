<?php

declare(strict_types=1);

$servername = "localhost";
$username = "product_managment";
$password = "zaq1@WSX";


try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $createDbSql = "CREATE DATABASE IF NOT EXISTS products;";
    $conn->exec($createDbSql);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
