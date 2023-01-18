<?php 
include('../../connect.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$busca_user = $conn->prepare("SELECT * FROM usuarios WHERE email=:userEmail and senha=:userPass");
$busca_user->bindParam(":userEmail", $email);
$busca_user->bindParam(":userPass", $senha);
$busca_user->execute() or die($busca_user->erroInfo());

if($busca_user->rowCount() > 0){
    session_start();
    $_SESSION['email'] = $email;
    echo "sucesso";
}else{
    echo "error"; 
}
