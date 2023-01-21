<?php 
    include('../../connect.php');

    //Inicia a sessão e verifica se o usuário está logado
    session_start();
    if(!$_SESSION['email']){
        header('Location: /canal_start/painel');
    }

     //Transforma URL em array para tratamento
     $url =  $_SERVER["REQUEST_URI"];
     $url_explode = explode('/', $url);
 
     /*
         página = $url_explode[3]
         primeiro parametro = $url_explode[4]
         segundo parametro = $url_explode[5]
         segundo parametro = $url_explode[6]
 
         TODO: Quando for colocar online reduzir em -1 os valores dos arrays;
     */

    //Pega dados do usuário logado
    $logged = $_SESSION['email'];
    $busca_user = $conn->prepare("SELECT * FROM usuarios WHERE email=:sessionLogged");
    $busca_user->bindParam(":sessionLogged", $logged);
    $busca_user->execute() or die($busca_user->erroInfo());
    $exibe_busca_user = $busca_user->fetch();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-language" content="pt-br, en-US" />
    <meta http-equiv="cache-control" content="max-age=31536000" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="author" content="João Gabriel dos Anjos Leal (Suzuh)" />
    <meta name="description" content="Painel administrativo do site Canal Start" />
    <meta name="keywords" content="painel, administração, web-tv" />
    <meta name="copyright" content="© <?php echo date('Y'); ?> Canal START | Painel administrativo" />
    <meta name="robots" content="no-index" />
    <meta name="googlebot" content="no-index" />
    <title>Canal START | Song Ga-Kyeong Panel</title>
    <link rel="icon" type="image/x-icon" href="<?php $_SERVER['HTTP_HOST'];?>/canal_start/admin/assets/img/favicon.ico">
    <!--preload-->
    <link rel="preload" href="<?php $_SERVER['HTTP_HOST'];?>/canal_start/admin/assets/css/main.css" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" as="style">
    <link rel="preload" href="https://vjs.zencdn.net/7.20.3/video-js.css" as="style">

    <link rel="preload" href="https://code.jquery.com/jquery-3.6.1.min.js" as="script">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" as="script">
    <link rel="preload" href="https://vjs.zencdn.net/7.20.3/video.min.js" as="script">
    <link rel="preload" href="<?php $_SERVER['HTTP_HOST'];?>/canal_start/admin/assets/js/main.js" as="script">

    <link rel="preconnect" href="https://stmv1.srvif.com/canalstart/canalstart/playlist.m3u8">
    <!--css--> 
    <link rel="stylesheet" href="<?php $_SERVER['HTTP_HOST'];?>/canal_start/admin/assets/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://vjs.zencdn.net/7.20.3/video-js.css">
</head>
<body class="body">

<nav class="sidenav position-fixed">
    <button class="sidenav-close btn btn-primary d-lg-none p-0"><i class="bi bi-x"></i></button>
    <div class="sidenav-logo w-100 d-none d-lg-flex justify-content-center mt-lg-3">
        <img src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/admin/assets/img/logo.webp">
    </div>
    <div class="sidenav-profile w-100 d-flex flex-wrap justify-content-center mt-4">
        <img src="<?php echo $exibe_busca_user['avatar']; ?>">
        <h5 class="w-100 text-center m-0 mt-3"><?php echo $exibe_busca_user['apelido']; ?></h5>
        <h6 class="w-100 text-center m-0"><?php echo $exibe_busca_user['nome']; ?></h6>
    </div>
    <ul class="sidenav-list mt-3 p-0">
        <li onclick="window.location.href='/canal_start/painel/inicio';"><i class="bi bi-house-fill"></i>&nbsp;Inicio</li>
        <li onclick="window.location.href='/canal_start/painel/perfil';"><i class="bi bi-person-fill"></i>&nbsp;Meu Perfil</li>
        <li><i class="bi bi-calendar-date-fill"></i>&nbsp;Programação
            <ul>
                <li onclick="window.location.href='/canal_start/painel/programacao/novo';">Criar novo programa</li>
                <li onclick="window.location.href='/canal_start/painel/programacao/lista';">Todos os programas</li>
            </ul>
        </li>
        <li><i class="bi bi-pencil-fill"></i>&nbsp;Speed News
            <ul>
                <li onclick="window.location.href='/canal_start/painel/speednews/novo';">Criar speed news</li>
                <li onclick="window.location.href='/canal_start/painel/speednews/lista';">Todos os speed news</li>
            </ul>
        </li>
        <li><i class="bi bi-star-fill"></i>&nbsp;Originais
            <ul>
                <li onclick="window.location.href='/canal_start/painel/originais/novo';">Criar original</li>
                <li onclick="window.location.href='/canal_start/painel/originais/lista';">Todos os originais</li>
            </ul>
        </li>
        <li><i class="bi bi-gear-fill"></i>&nbsp;Configurações
            <ul>
                <li>Gerênciar usuários</li>
                <li>Gerênciar aparência do site</li>
                <li>Gêrenciar divulgação</li>
            </ul>
        </li>
        <li><i class="bi bi-door-open-fill"></i>&nbsp;Deslogar</li>
    </ul>
</nav>

<section class="top-bar position-fixed top-0 w-100">
    <img class="d-lg-none" src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/admin/assets/img/favicon.ico">
    <div class="btn border-0"><i class="bi bi-eye-fill"></i> 0000</div>
    <button type="button" class="sidenav-toggle btn float-end d-lg-none border-0"><i class="bi bi-list"></i></button>
</section>

<div class="content">
    <!--
        O conteúdo das páginas irá ser carregado dentro dessa div
    -->
    <?php 
        switch($url_explode[3]){
            case 'inicio':
                include('dashboard.php');
            break;
            case 'perfil':
                include('usuarios.php');
            break;
            case 'programacao':
                include('programacao.php');
            break;
            case 'speednews':
                include('speednews.php');
            break;
            case 'originais':
                include('originais.php');
            break;
        }
    ?>

    <footer class="w-100 position-relative text-center text-uppercase bottom-3">
        Start | Song Ga-Kyeong Panel - Versão 1.0<br>
        Planejamento e desenvolvimento por João Gabriel
    </footer>
</div>
<!--javascript-->
<script defer src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script defer src="https://vjs.zencdn.net/7.20.3/video.min.js"></script>
<script defer src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/admin/assets/js/main.js"></script>
</body>
</html>