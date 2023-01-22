<?php
include('../../connect.php');

//CADASTRA ORIGINAL*******************************************************
if($_GET['model'] == "create"){
    $nome = $_POST['nome'];
    $tag = $_POST['tag'];
    $video = $_POST['video'];

    $tag_tratamento01 = str_replace(" ", "-", preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($tag)))); //Remove acentuação e substitui espaço por traços
    $tag_tratamento02 = strtolower($tag_tratamento01);

    $cadastra = $conn->prepare("INSERT INTO originais(nome,video,tag, tag_url) VALUES (:originalNome,:originalVideo,:originalTag,:originalTagUrl)");
    $cadastra->bindParam(":originalNome", $nome);
    $cadastra->bindParam(":originalVideo", $video);
    $cadastra->bindParam(":originalTag", $tag);
    $cadastra->bindParam(":originalTagUrl", $tag_tratamento02);

    if($cadastra->execute()){
        echo "sucesso";
    }else{
        print_r($cadastra->erroInfo());
    }
}

//EDITA ORIGINAL*******************************************************
if($_GET['model'] == "edit"){
    $nome = $_POST['nome'];
    $tag = $_POST['tag'];
    $video = $_POST['video'];
    $id = $_POST['id'];

    $tag_tratamento01 = str_replace(" ", "-", preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($tag)))); //Remove acentuação e substitui espaço por traços
    $tag_tratamento02 = strtolower($tag_tratamento01);

    $cadastra = $conn->prepare("UPDATE originais SET nome=:originalNome, video=:originalVideo, tag=:originalTag, tag_url=:originalTagUrl");
    $cadastra->bindParam(":originalNome", $nome);
    $cadastra->bindParam(":originalVideo", $video);
    $cadastra->bindParam(":originalTag", $tag);
    $cadastra->bindParam(":originalTagUrl", $tag_tratamento02);

    if($cadastra->execute()){
        echo "sucesso";
    }else{
        print_r($cadastra->erroInfo());
    }
}

//DELETA ORIGINAL*******************************************************
if($_GET['model'] == "delete"){
    $id = $_GET['id'];
 
    $delete = $conn->prepare("DELETE from originais WHERE id=:originalId");
    $delete->bindParam(":originalId", $id);
 
    if($delete->execute()){
         header('location: /canal_start/painel/originais/lista');
    }else{
         print_r($delete->erroInfo());
    }
 }