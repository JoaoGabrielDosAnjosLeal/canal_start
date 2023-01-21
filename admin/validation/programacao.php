<?php
include('../../connect.php');

if($_GET['model'] == "create"){
    $destaque = $_POST['destaque'];
    $nome = $_POST['nome'];
    $periodo = $_POST['periodo'];
    $horario = $_POST['horario'];
    $thumb = $_POST['thumb'];

    $cadastra = $conn->prepare("INSERT INTO programacao(destaque,nome,periodo,horario,thumb) VALUES (:programacaoDestaque,:programacaoNome,:programacaoPeriodo,:programacaoHorario,:programacaoThumb)");
    $cadastra->bindParam(":programacaoDestaque", $destaque);
    $cadastra->bindParam(":programacaoNome", $nome);
    $cadastra->bindParam(":programacaoPeriodo", $periodo);
    $cadastra->bindParam(":programacaoHorario", $horario);
    $cadastra->bindParam(":programacaoThumb", $thumb);
    
    if($cadastra->execute()){
        echo "sucesso";
    }else{
        echo $cadastra->erroInfo();
    }
}

if($_GET['model'] == "edit"){
    if($_GET['thumb'] == "no"){
        $destaque = $_POST['destaque'];
        $nome = $_POST['nome'];
        $periodo = $_POST['periodo'];
        $horario = $_POST['horario'];
        $id = $_POST['id'];

        $atualiza = $conn->prepare("UPDATE programacao SET destaque=:programacaoDestaque, nome=:programacaoNome, periodo=:programacaoPeriodo, horario=:programacaoHorario WHERE id=:programacaoId");
        $atualiza->bindParam(":programacaoDestaque", $destaque);
        $atualiza->bindParam(":programacaoNome", $nome);
        $atualiza->bindParam(":programacaoPeriodo", $periodo);
        $atualiza->bindParam(":programacaoHorario", $horario);
        $atualiza->bindParam(":programacaoId", $id);
        
        if($atualiza->execute()){
            echo "sucesso";
        }else{
            echo $atualiza->erroInfo();
        }
    }
    if($_GET['thumb'] == "yes"){
        $destaque = $_POST['destaque'];
        $nome = $_POST['nome'];
        $periodo = $_POST['periodo'];
        $horario = $_POST['horario'];
        $thumb = $_POST['thumb'];
        $id = $_POST['id'];

        $atualiza = $conn->prepare("UPDATE programacao SET destaque=:programacaoDestaque, nome=:programacaoNome, periodo=:programacaoPeriodo, horario=:programacaoHorario, thumb=:programacaoThumb WHERE id=:programacaoId");
        $atualiza->bindParam(":programacaoDestaque", $destaque);
        $atualiza->bindParam(":programacaoNome", $nome);
        $atualiza->bindParam(":programacaoPeriodo", $periodo);
        $atualiza->bindParam(":programacaoHorario", $horario);
        $atualiza->bindParam(":programacaoThumb", $thumb);
        $atualiza->bindParam(":programacaoId", $id);
        
        if($atualiza->execute()){
            echo "sucesso";
        }else{
            echo $atualiza->erroInfo();
        }
    }
}

if($_GET['model'] == "delete"){
    $id = $_GET['id'];
 
    $delete = $conn->prepare("DELETE from programacao WHERE id=:programacaoId");
    $delete->bindParam(":programacaoId", $id);
 
    if($delete->execute()){
         header('location: /canal_start/painel/programacao/lista');
    }
 }