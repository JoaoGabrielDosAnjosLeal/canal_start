<?php
include('../../connect.php');
session_start();

//PUBLICA POST*******************************************************

if($_GET['model'] == "create"){
    //Faz busca para saber qual é o apelido do usuário que está fazendo a publicação para entrar como autor;
    $logged = $_SESSION['email'];
    $busca_user = $conn->prepare("SELECT * FROM usuarios WHERE email=:sessionLogged");
    $busca_user->bindParam(":sessionLogged", $logged);
    $busca_user->execute() or die($busca_user->erroInfo());
    $exibe_busca_user = $busca_user->fetch();

    //Variaveis com os conteúdos corretos e envio para o banco de dados
    $autor = $exibe_busca_user['apelido'];
    $data = date('d/m/y');
    $titulo = $_POST['titulo'];
    $hashtag = $_POST['hashtag'];
    $conteudo = $_POST['conteudo'];
    $thumb = $_POST['thumb'];
    $react_like = "0";
    $react_deslike = "0";
    $react_love = "0";
    $react_sad = "0";

    $url_tratamento01 = str_replace(" ", "-", preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($titulo)))); //Remove acentuação e substitui espaço por traços
    $url_tratamento02 = strtolower($url_tratamento01); // Deixa tudo em minusculo
    $url = $url_tratamento02;

    $cadastra = $conn->prepare("INSERT INTO speed_news(autor,data,titulo,hashtag,conteudo,thumb,url,react_gostei,react_nao_gostei,react_amei,react_triste) VALUES (:postAutor, :postData, :postTitulo, :postHashtag, :postConteudo, :postThumb, :postUrl,:postReactGostei,:postReactNaoGostei,:postReactAmei,:postReactTriste)");
    $cadastra->bindParam(":postAutor", $autor);
    $cadastra->bindParam(":postData", $data);
    $cadastra->bindParam(":postTitulo", $titulo);
    $cadastra->bindParam(":postHashtag", $hashtag);
    $cadastra->bindParam(":postConteudo", $conteudo);
    $cadastra->bindParam(":postThumb", $thumb);
    $cadastra->bindParam(":postUrl", $url);
    $cadastra->bindParam(":postReactGostei", $react_like);
    $cadastra->bindParam(":postReactNaoGostei", $react_deslike);
    $cadastra->bindParam(":postReactAmei", $react_love);
    $cadastra->bindParam(":postReactTriste", $react_sad);

    if($cadastra->execute()){
        echo "sucesso";
    }else{
        print_r($cadastra->erroInfo());
    }
}


//EDITA POST*******************************************************

if($_GET['model'] == "edit"){
    if($_GET['thumb'] == "no"){

        //Variaveis com os conteúdos corretos e envio para o banco de dados
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $hashtag = $_POST['hashtag'];
        $conteudo = $_POST['conteudo'];

        $atualiza = $conn->prepare("UPDATE speed_news SET titulo=:postTitulo, hashtag=:postHashtag, conteudo=:postConteudo WHERE id=:postId");
        $atualiza->bindParam(":postTitulo", $titulo);
        $atualiza->bindParam(":postHashtag", $hashtag);
        $atualiza->bindParam(":postConteudo", $conteudo);
        $atualiza->bindParam(":postId", $id);

        if($atualiza->execute()){
            echo "sucesso";
        }else{
            print_r($atualiza->erroInfo());
        }
    }
    if($_GET['thumb'] == "yes"){

        //Variaveis com os conteúdos corretos e envio para o banco de dados
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $hashtag = $_POST['hashtag'];
        $conteudo = $_POST['conteudo'];
        $thumb = $_POST['thumb'];

        $atualiza = $conn->prepare("UPDATE speed_news SET titulo=:postTitulo, hashtag=:postHashtag, conteudo=:postConteudo, thumb=:postThumb WHERE id=:postId");
        $atualiza->bindParam(":postTitulo", $titulo);
        $atualiza->bindParam(":postHashtag", $hashtag);
        $atualiza->bindParam(":postConteudo", $conteudo);
        $atualiza->bindParam(":postThumb", $thumb);
        $atualiza->bindParam(":postId", $id);

        if($atualiza->execute()){
            echo "sucesso";
        }else{
            print_r($atualiza->erroInfo());
        }
    }
}

//DELETA POST*******************************************************
if($_GET['model'] == "delete"){
   $id = $_GET['id'];

   $delete = $conn->prepare("DELETE from speed_news WHERE id=:postId");
   $delete->bindParam(":postId", $id);

   if($delete->execute()){
        header('location: /canal_start/painel/speednews/lista');
   }else{
        print_r($delete->erroInfo());
   }
}