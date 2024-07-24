<?php

declare(strict_types=1);

$env = parse_ini_file('../.env');
class Database
{
    private static $conn;


    // TODO method to add
    // TODO method to delete
    // TODO method to get
    // TODO migrate database functionality + add creation of table
    public function __construct()
    {
        $this->connect();
    }
    public function connect()
    {
        global $env;

        $servername = $env["SERVERNAME"];
        $username = $env["USERNAME"];
        $password = $env["PASSWORD"];

        try {
            self::$conn = new PDO("mysql:host=$servername", $username, $password);
            // set the PDO error mode to exception
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $createDbSql = "CREATE DATABASE IF NOT EXISTS products;";
            self::$conn->exec($createDbSql);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
$database = new Database();
