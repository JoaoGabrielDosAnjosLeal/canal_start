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
    <link rel="preload" href="<?php $_SERVER['HTTP_HOST'];?>/canal_start/admin/assets/css/main.min.css" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" as="style">
    <link rel="preload" href="https://vjs.zencdn.net/7.20.3/video-js.css" as="style">

    <link rel="preload" href="https://code.jquery.com/jquery-3.6.1.min.js" as="script">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" as="script">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js" as="script">
    <link rel="preload" href="https://vjs.zencdn.net/7.20.3/video.min.js" as="script">
    <link rel="preload" href="<?php $_SERVER['HTTP_HOST'];?>/canal_start/admin/assets/js/main.min.js" as="script">

    <!--css--> 
    <link rel="stylesheet" href="<?php $_SERVER['HTTP_HOST'];?>/canal_start/admin/assets/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://vjs.zencdn.net/7.20.3/video-js.css">
</head>
<body class="body">

<nav class="sidenav vh-100 position-fixed pt-4">
    <div class="w-100 sidenav-logo d-flex justify-content-center">
        <img src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/admin/assets/img/logo.webp" alt="Logo do Song Ga-Kyeong Panel">
    </div>
    <div class="w-100 sidenav-profile d-flex flex-wrap justify-content-center mt-4">
        <img src="https://i.pinimg.com/564x/3f/9d/d0/3f9dd01a974671f3cabd6df98c0365bd.jpg" alt="Avatar do usuário">
        <h5 class="w-100 text-center m-0 mt-3">Takashi</h5>
        <h6 class="w-100 text-center m-0">Antônio Medeiros Lopes</h6>
    </div>
    <ul class="sidenav-list vh-100 mt-3 p-0">
        <a href="#"><li><i class="bi bi-house-fill"></i>&nbsp;Dashboard</li></a>
        <a href="#"><li><i class="bi bi-person-fill"></i>&nbsp;Meu Perfil</li></a>
        <a href="#"><li><i class="bi bi-pencil-fill"></i>&nbsp;Speed News</li></a>
        <a href="#"><li><i class="bi bi-star-fill"></i>&nbsp;Originais</li></a>
        <a href="#"><li><i class="bi bi-gear-fill"></i>&nbsp;Configurações</li></a>
        <a href="#"><li><i class="bi bi-door-open-fill"></i>&nbsp;Deslogar</li></a>
    </ul>
</nav>

<section class="content">
    <div class="content-bar">
        <button type="button" class="btn border-0"><i class="bi bi-eye-fill"></i> 0000</button>
        <button type="button" class="btn float-end d-lg-none"><i class="bi bi-list"></i></button>
    </div>
    <div class="content-container p-4">
        <?php 
            $url =  $_SERVER["REQUEST_URI"];
            $urlExplode = explode('/', $url);
            $urlParameter =  $urlExplode[3]; //Parametro único da página ( Tag da categoria )
           
            switch($urlParameter){
                case 'dashboard':
                    include('dashboard.php');
                break;
            }
            
        ?>
    </div>
</section>

<!--javascript-->
<script defer src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script defer src="https://vjs.zencdn.net/7.20.3/video.min.js"></script>
<script defer src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/admin/assets/js/main.js"></script>
</body>
</html>