<?php 
include('../../connect.php');

if($_GET['avatar'] == "no"){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $id = $_POST['id'];

    $atualiza = $conn->prepare("UPDATE usuarios SET email=:profileEmail, senha=:profileSenha, nome=:profileNome, apelido=:profileApelido WHERE id=:profileId");
    $atualiza->bindParam(":profileEmail", $email);
    $atualiza->bindParam(":profileSenha", $senha);
    $atualiza->bindParam(":profileNome", $nome);
    $atualiza->bindParam(":profileApelido", $apelido);
    $atualiza->bindParam(":profileId", $id);

    if($atualiza->execute()){
        echo "sucesso";
    }else{
        die($atualiza->erroInfo());
    }
}

if($_GET['avatar'] == "yes"){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $avatar = $_POST['avatar'];
    $id = $_POST['id'];

    $atualiza = $conn->prepare("UPDATE usuarios SET email=:profileEmail, senha=:profileSenha, nome=:profileNome, apelido=:profileApelido, avatar=:profileAvatar WHERE id=:profileId");
    $atualiza->bindParam(":profileEmail", $email);
    $atualiza->bindParam(":profileSenha", $senha);
    $atualiza->bindParam(":profileNome", $nome);
    $atualiza->bindParam(":profileApelido", $apelido);
    $atualiza->bindParam(":profileAvatar", $avatar);
    $atualiza->bindParam(":profileId", $id);

    if($atualiza->execute()){
        echo "sucesso";
    }else{
        die($atualiza->erroInfo());
    }
}

