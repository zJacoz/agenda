<?php

$host = "localhost";
$db = "agenda";
$user = "root";
$pwd = "";

try {

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);

    // ATIVAR O MODO DE ERROS
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    // CONNECTION ERROR
    $error = $e->getMessage();
    echo "Erro: " . $error;
}