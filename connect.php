<?php 
$host = "mysql:host=localhost;dbname=start";
$username = "root";
$password = "";

try{
    $conn = new PDO($host, $username, $password);
}catch( PDOException $Exception ){
    die('Erro: '.$Exception);
}