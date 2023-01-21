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

    $url_tratamento01 = str_replace(" ", "-", preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($titulo)))); //Remove acentuação e substitui espaço por traços
    $url_tratamento02 = strtolower($url_tratamento01); // Deixa tudo em minusculo
    $url = $url_tratamento02;

    $publica = $conn->prepare("INSERT INTO speed_news(autor,data,titulo,hashtag,conteudo,thumb,url) VALUES (:postAutor, :postData, :postTitulo, :postHashtag, :postConteudo, :postThumb, :postUrl)");
    $publica->bindParam(":postAutor", $autor);
    $publica->bindParam(":postData", $data);
    $publica->bindParam(":postTitulo", $titulo);
    $publica->bindParam(":postHashtag", $hashtag);
    $publica->bindParam(":postConteudo", $conteudo);
    $publica->bindParam(":postThumb", $thumb);
    $publica->bindParam(":postUrl", $url);

    if($publica->execute()){
        echo "sucesso";
    }else{
        echo $publica->erroInfo();
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
            echo $atualiza->erroInfo();
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
            echo $atualiza->erroInfo();
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
   }
}