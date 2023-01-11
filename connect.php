<?php 
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'start';

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
    die('Erro de conexão ao banco de dados: '.mysqli_connect_error());
}