<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-language" content="pt-br, en-US" />
    <meta http-equiv="cache-control" content="max-age=31536000" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="author" content="João Gabriel dos Anjos Leal (Suzuh)" />
    <meta name="description" content="START é um canal OTT Streaming TV transmitindo 24h pela internet, ou seja, somos um canal de televisão brasileiro e gamer de abrangência global!" />
    <meta name="keywords" content="start, começo, começar, início, iniciar, canal, channel, tv, televisão, television, grátis, free, online, stream, streaming, ott, over the top, 24h, internet, brasil, brasileiro, brasileira, global, gênero, gêneros, otaku, atakus, otome, otomes, anime, animes, geek, geeks, filme, filmes, movie, movies, série, séries, serie, series, nerd, nerds, tech, tecnologia, pause, pausa, pausar, opção, game, games, gamer, gamers, play, plays, gameplay, gameplays, ação, action, aventura, adventure, esporte, esportes, sport, sports, live, life, ao vivo, transmissão, transmission, gravado, gravação, recorder, evento, eventos, esport, esports, eletrônico, eletrônicos" />
    <meta name="copyright" content="© <?php echo date("Y"); ?> Canal START | Pausar não é uma opção!" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <title>Canal START | Pausar não é uma OPÇÃO!</title>
    <link rel="shortcut icon" href="<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/img/favicon.ico" type="image/x-icon">
    <!--preloads-->
    <link rel="preload" href="<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/css/main.min.css" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" as="style">
    <link rel="preload" href="https://vjs.zencdn.net/7.20.3/video-js.css" as="style">
    <!--css--> 
    <link rel="stylesheet" href="<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/css/main.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://vjs.zencdn.net/7.20.3/video-js.css">
    <!--pwa-->
    <link rel="manifest" href="manifest.json">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Start">
    <meta name="apple-mobile-web-app-title" content="Start">
    <meta name="theme-color" content="#003399">
    <meta name="msapplication-navbutton-color" content="#003399">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="./">
    <link rel="apple-touch-icon" type="image/png" sizes="200x200" href="https://i.imgur.com/EElpuYW.png">
</head>
<body class="body">

<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand d-lg-none" onclick="history.pushState('home', 'home', '/canal_start'); router();"><img src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/img/logo.webp" loading="lazy" alt="Logo do site"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="text-uppercase" onclick="history.pushState('originais', 'originais', '/canal_start/originais/'); router();">Originais</a>
                    </li>
                    <li class="nav-logoPC d-none d-lg-block">
                        <a class="nav-link d-flex justify-content-center" onclick="history.pushState('home', 'home', '/canal_start'); router();"><img src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/img/logo.webp" alt="Logo do site"></a>
                    </li>
                    <li class="nav-item">
                        <a class="text-uppercase" onclick="history.pushState('programacao', 'programacao', '/canal_start/programacao/'); router();">Programação</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="player">
    <img class="player-leftSide" src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/img/bg-player.left.webp" alt="Fundo lado esquerdo">
    <img class="player-rightSide float-end" src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/img/bg-player.right.webp" alt="Fundo lado direito">
    <div class="player-video">
        <button class="btn-theme position-absolute rounded-circle p-0"><i class="bi bi-moon-stars-fill"></i></button>
        <video id="my-video" class="video-js" controls autoplay muted poster="https://i.imgur.com/bqQFO6t.png" data-setup="{}">
            <source src="https://stmv1.srvif.com/canalstart/canalstart/playlist.m3u8" type="application/x-mpegURL" />
        </video>
    </div>
</div>

<main class="main">
    <!--O CONTEÚDO SERÁ CARREGADO DINAMICAMENTE-->
</main>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
                <section class="footer d-flex justify-content-center flex-wrap pt-4 pb-4">
                    <img class="footer-logo" src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/img/logo.white.webp" loading="lazy" alt="Logo do site">
                    <p class="footer-text w-100 text-center m-0 mt-3">
                        Copyright © 2022 - <?php echo date("Y"); ?> | Canal Start - Pausar não é uma OPÇÃO!<br>
                        Planejamento por <span>Antônio Lopes</span>, design por <span>Ellyson Santos</span> e desenvolvimento por <span>João Gabriel</span>.<br>
                        Todas as imagens de jogos, consoles, personagens e etc são marcas registradas dos seus respectivos autores.
                    </p>
                </section>
            </div>
        </div>
    </div>
</footer>



<!--javascript-->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
<script src="https://vjs.zencdn.net/7.20.3/video.min.js"></script>
<script src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/js/main.min.js"></script>
</body>
</html>