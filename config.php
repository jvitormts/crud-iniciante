<?php
GLOBAL $pdo;

$dsn = "mysql:dbname=crud-iniciante;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn,$dbuser,$dbpass);
}catch (PDOException $e){
    echo " Erro ao conectar ao banco de dados: ". $e->getMessage();
}

