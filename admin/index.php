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
    <link rel="icon" type="image/x-icon" href="<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/img/favicon.ico">
    <!--preload -->
    <link rel="preload" href="<?php $_SERVER['HTTP_HOST'];?>/canal_start/admin/assets/css/main.min.css" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" as="style">

    <link rel="preload" href="https://code.jquery.com/jquery-3.6.1.min.js" as="script">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" as="script">
    <link rel="preload" href="<?php $_SERVER['HTTP_HOST'];?>/canal_start/admin/assets/js/main.min.js" as="script">
    <!--css--> 
    <link rel="stylesheet" href="<?php $_SERVER['HTTP_HOST'];?>/canal_start/admin/assets/css/main.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://vjs.zencdn.net/7.20.3/video-js.css">
<body class="body" style="background-color: #EAEAEA;">

<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xll-9 mt-5">
            <section class="login d-flex gap-3 mt-4">
                <div class="login-left p-4">
                    <img class="login-logo mb-4" src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/img/logo.webp" alt="Logo do painel">
                    <form class="login-form" action="javascript: login_form();">
                        <div class="mb-3">
                            <label for="email" class="form-label"><i class="bi bi-envelope-fill"></i>&nbsp;E-mail</label>
                            <input type="email" name="email" class="form-control shadow-none" id="email" aria-label="email" placeholder="Fuslie" required>
                        </div>
                        <div class="mb-4">
                            <label for="senha" class="form-label"><i class="bi bi-key-fill"></i>&nbsp;Senha</label>
                            <input type="password" name="senha" class="form-control shadow-none" id="senha" aria-label="senha" placeholder="•••••••••" required>
                        </div>
                        <button type="submit" class="btn w-100 text-uppercase"><i class="bi bi-box-arrow-in-right"></i>&nbsp;Entrar</button>
                    </form>
                    <button class="login-help btn w-100 mt-2 text-uppercase"><i class="bi bi-question-circle"></i>&nbsp;Ajuda</button>
                </div>
                <div class="login-right d-none d-lg-block">
                    <img class="login-banner img-fluid" src="https://images6.alphacoders.com/503/thumb-1920-503480.jpg">
                </div>
            </section>
        </div>
    </div>
</div>
    

<footer class="w-100 position-absolute text-center text-uppercase">
    Start | Song Ga-Kyeong Panel - Versão 1.0<br>
    Planejamento e desenvolvimento por João Gabriel
</footer>
<!--javascript-->
<script defer src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script defer src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/admin/assets/js/main.min.js"></script>
</body>
</html>