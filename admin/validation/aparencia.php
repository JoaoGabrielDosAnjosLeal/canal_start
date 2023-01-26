<?php
include('../../connect.php');

if($_GET['model'] == "destaque"){

    $id = "1";
    $background = $_POST['background'];


    $atualiza = $conn->prepare("UPDATE aparencia SET background=:aparenciaBackground WHERE id=:aparenciaId");
    $atualiza->bindParam(":aparenciaBackground", $background);
    $atualiza->bindParam(":aparenciaId", $id);

    if($atualiza->execute()){
        echo "sucesso";
    }else{
        print_r($atualiza->erroInfo());
    }

}

if($_GET['model'] == "originais"){

    $id = "2";
    $background = $_POST['background'];


    $atualiza = $conn->prepare("UPDATE aparencia SET background=:aparenciaBackground WHERE id=:aparenciaId");
    $atualiza->bindParam(":aparenciaBackground", $background);
    $atualiza->bindParam(":aparenciaId", $id);

    if($atualiza->execute()){
        echo "sucesso";
    }else{
        print_r($atualiza->erroInfo());
    }

}

if($_GET['model'] == "divulgacao"){

    $id = "4";
    $background = $_POST['background'];


    $atualiza = $conn->prepare("UPDATE aparencia SET background=:aparenciaBackground WHERE id=:aparenciaId");
    $atualiza->bindParam(":aparenciaBackground", $background);
    $atualiza->bindParam(":aparenciaId", $id);

    if($atualiza->execute()){
        echo "sucesso";
    }else{
        print_r($atualiza->erroInfo());
    }

}

if($_GET['model'] == "sobre"){

    $id = "5";
    $background = $_POST['background'];


    $atualiza = $conn->prepare("UPDATE aparencia SET background=:aparenciaBackground WHERE id=:aparenciaId");
    $atualiza->bindParam(":aparenciaBackground", $background);
    $atualiza->bindParam(":aparenciaId", $id);

    if($atualiza->execute()){
        echo "sucesso";
    }else{
        print_r($atualiza->erroInfo());
    }

}