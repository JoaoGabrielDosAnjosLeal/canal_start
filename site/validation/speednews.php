<?php 
    include('../../connect.php');

if($_GET['type'] == "react"){
    if($_GET['model'] == "like"){
        $url = $_POST['url'];

        $busca_speednews = $conn->prepare("SELECT * FROM speed_news WHERE url=:speednewsUrl");
        $busca_speednews->bindParam(":speednewsUrl", $url);
        $busca_speednews->execute();
        $resultado_busca_speednews = $busca_speednews->fetch();

        $total_votos = $resultado_busca_speednews['react_gostei'];
        $adiciona_voto = $total_votos + 1;

        $cadastra_voto = $conn->prepare("UPDATE speed_news SET react_gostei=:reactVote WHERE url=:speednewsUrl");
        $cadastra_voto->bindParam(":reactVote", $adiciona_voto);
        $cadastra_voto->bindParam(":speednewsUrl", $url);
        
        if($cadastra_voto->execute()){
            echo "sucesso";
        }
    }

    if($_GET['model'] == "deslike"){
        $url = $_POST['url'];

        $busca_speednews = $conn->prepare("SELECT * FROM speed_news WHERE url=:speednewsUrl");
        $busca_speednews->bindParam(":speednewsUrl", $url);
        $busca_speednews->execute();
        $resultado_busca_speednews = $busca_speednews->fetch();

        $total_votos = $resultado_busca_speednews['react_nao_gostei'];
        $adiciona_voto = $total_votos + 1;

        $cadastra_voto = $conn->prepare("UPDATE speed_news SET react_nao_gostei=:reactVote WHERE url=:speednewsUrl");
        $cadastra_voto->bindParam(":reactVote", $adiciona_voto);
        $cadastra_voto->bindParam(":speednewsUrl", $url);
        
        if($cadastra_voto->execute()){
            echo "sucesso";
        }
    }

    if($_GET['model'] == "love"){
        $url = $_POST['url'];

        $busca_speednews = $conn->prepare("SELECT * FROM speed_news WHERE url=:speednewsUrl");
        $busca_speednews->bindParam(":speednewsUrl", $url);
        $busca_speednews->execute();
        $resultado_busca_speednews = $busca_speednews->fetch();

        $total_votos = $resultado_busca_speednews['react_amei'];
        $adiciona_voto = $total_votos + 1;

        $cadastra_voto = $conn->prepare("UPDATE speed_news SET react_amei=:reactVote WHERE url=:speednewsUrl");
        $cadastra_voto->bindParam(":reactVote", $adiciona_voto);
        $cadastra_voto->bindParam(":speednewsUrl", $url);
        
        if($cadastra_voto->execute()){
            echo "sucesso";
        }
    }

    if($_GET['model'] == "sad"){
        $url = $_POST['url'];

        $busca_speednews = $conn->prepare("SELECT * FROM speed_news WHERE url=:speednewsUrl");
        $busca_speednews->bindParam(":speednewsUrl", $url);
        $busca_speednews->execute();
        $resultado_busca_speednews = $busca_speednews->fetch();

        $total_votos = $resultado_busca_speednews['react_triste'];
        $adiciona_voto = $total_votos + 1;

        $cadastra_voto = $conn->prepare("UPDATE speed_news SET react_triste=:reactVote WHERE url=:speednewsUrl");
        $cadastra_voto->bindParam(":reactVote", $adiciona_voto);
        $cadastra_voto->bindParam(":speednewsUrl", $url);
        
        if($cadastra_voto->execute()){
            echo "sucesso";
        }
    }
}