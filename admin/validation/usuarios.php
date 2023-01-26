<?php 
include('../../connect.php');

if($_GET['model'] == "edit"){
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
           echo $atualiza->erroInfo();
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
            print_r($atualiza->erroInfo());
        }
    }    
}

if($_GET['model'] == "create"){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $nome = $_POST['nome'];
        $apelido = $_POST['apelido'];
        $avatar = $_POST['avatar'];

        $cadastra = $conn->prepare("INSERT INTO usuarios(email,senha,nome,apelido,avatar) VALUES (:userEmail, :userSenha, :userNome, :userApelido, :userAvatar)");
        $cadastra->bindParam(":userEmail", $email);
        $cadastra->bindParam(":userSenha", $senha);
        $cadastra->bindParam(":userNome", $nome);
        $cadastra->bindParam(":userApelido", $apelido);
        $cadastra->bindParam(":userAvatar", $avatar);

        if($cadastra->execute()){
            echo "sucesso";
        }else{
            print_r($cadastra->erroInfo());
        }
}

if($_GET['model'] == "delete"){
    $id = $_GET['id'];
 
    $delete = $conn->prepare("DELETE from usuarios WHERE id=:userId");
    $delete->bindParam(":userId", $id);
 
    if($delete->execute()){
         header('location: /canal_start/painel/usuarios/lista');
    }else{
         print_r($delete->erroInfo());
    }
 }