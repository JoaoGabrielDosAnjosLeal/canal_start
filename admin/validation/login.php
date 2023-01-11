<?php 
session_start();
require('../../connect.php');

$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$buscaUser = "SELECT * FROM usuario WHERE email='{$email}' and senha='{$senha}'";
$resultado_buscaUser = mysqli_query($conn, $buscaUser);
$total_buscaUser = mysqli_num_rows($resultado_buscaUser);

if($total_buscaUser == 1){
    $_SESSION['email'] = $email;
    echo "login efetuado";
}else{
    $_SESSION['nao_autenticado'] = true;
    echo "login não encontrado";
}