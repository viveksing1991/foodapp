<?php

$host = 'localhost';
$db = 'food_learn';
$user = 'root';
$password = '';
$dsn = "mysql:host=$host;dbname=$db";
$options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);


try {

    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {

    echo "There is some problem in connection: " . $e->getMessage();
    throw new PDOException($e->getMessage());
}

require_once 'crud.php';
$crud = new crud($pdo);
