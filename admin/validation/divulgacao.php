<?php 
include('../../connect.php');

if($_GET['model'] == "create"){
    $nome = $_POST['nome'];
    $url = $_POST['url'];
    $logo = $_POST['logo'];

    $cadastra = $conn->prepare("INSERT INTO divulgacao(nome,url,logo) VALUES (:divNome,:divUrl,:divLogo)");
    $cadastra->bindParam(":divNome", $nome);
    $cadastra->bindParam(":divUrl", $url);
    $cadastra->bindParam(":divLogo", $logo);
    
    if($cadastra->execute()){
        echo "sucesso";
    }else{
        print_r($cadastra->erroInfo());
    }
}


if($_GET['model'] == "edit"){
   if($_GET['logo'] == "no"){
        $nome = $_POST['nome'];
        $url = $_POST['url'];
        $id = $_POST['id'];

        $atualiza = $conn->prepare("UPDATE divulgacao SET nome=:divNome, url=:divUrl WHERE id=:divId");
        $atualiza->bindParam(":divNome", $nome);
        $atualiza->bindParam(":divUrl", $url);
        $atualiza->bindParam(":divId", $id);
        
        if($atualiza->execute()){
            echo "sucesso";
        }else{
            print_r($atualiza->erroInfo());
        }
   }
   if($_GET['logo'] == "yes"){
        $nome = $_POST['nome'];
        $url = $_POST['url'];
        $logo = $_POST['logo'];
        $id = $_POST['id'];

        $atualiza = $conn->prepare("UPDATE divulgacao SET nome=:divNome, url=:divUrl, logo=:divLogo WHERE id=:divId");
        $atualiza->bindParam(":divNome", $nome);
        $atualiza->bindParam(":divUrl", $url);
        $atualiza->bindParam(":divLogo", $logo);
        $atualiza->bindParam(":divId", $id);
        
        if($atualiza->execute()){
            echo "sucesso";
        }else{
            print_r($atualiza->erroInfo());
        }
    }
}

if($_GET['model'] == "delete"){
    $id = $_GET['id'];
 
    $delete = $conn->prepare("DELETE from divulgacao WHERE id=:divId");
    $delete->bindParam(":divId", $id);
 
    if($delete->execute()){
         header('location: /canal_start/painel/divulgacao/lista');
    }else{
         print_r($delete->erroInfo());
    }
 }