<?php 
    include('../../connect.php');
?>
<script defer>
    $('title').text('Canal START | Pausar não é uma OPÇÃO!');
    //SpeedNews
    $('.speedNews-article').children('button').click(function(){
        $(this).parent().children('p, span').fadeToggle();
    });

    //Tema da página
    switch(Cookies.get('theme')){
        case 'dark':
            $('.speedNews-navbar').css({"background-image": "url('/canal_start/site/assets/img/bg-nav.black.webp')"});
            $('.speedNews-container').css({"background-image": "url('/canal_start/site/assets/img/bg-nav.center.black.webp')"});
            $('.speedNews').css({"background-color": "#393939"});
            $('.speedNews-title').css({"color": "#ffffff"});
        break;
        default:
            $('.speedNews-navbar').css({"background-image": "url('/canal_start/site/assets/img/bg-nav.webp')"});
            $('.speedNews-container').css({"background-image": "url('/canal_start/site/assets/img/bg-nav.center.webp')"});
            $('.speedNews').css({"background-color": ""});
            $('.speedNews-title').css({"color": ""});
        break;
    }

    //Desfaz alterações das páginas internas
    $('.player').css({'height': ''});
    $('.player-leftSide, .player-rightSide').css({'display': ''});
    $('.btn-theme').show();

    $('.player-video').css({
        'width': '',
        'height': '',
        'position': '',
        'top': 'auto', //Essa propriedade não tem padrão no css, é só somente para que o elemento volte ao seu estado original do draggable do jquery ui
        'left': 'auto', //Essa propriedade não tem padrão no css, é só somente para que o elemento volte ao seu estado original do draggable do jquery ui
        'right': '',
        'bottom': '',
        'margin': '',
        'z-index': ''
    })

    $('.player-video').draggable(); //É necessário iniciar o draggable pra destruir ele primeiro, isso foi feito pro primeiro acesso
    $('.player-video').draggable("destroy");
</script>

<div class="speedNews">
    <nav class="speedNews-navbar navbar w-100">
        <div class="speedNews-container container-fluid mx-auto">
            <h6 class="speedNews-title navbar-brand text-center w-100 text-uppercase">Speed News</h6>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
                <section class="speedNews-section d-flex flex-wrap gap-3 justify-content-center mt-4 mb-4">
                <?php
                    $busca_speednews = $conn->prepare("SELECT * FROM speed_news ORDER BY id DESC LIMIT 4");
                    $busca_speednews->execute();

                    while($exibe_speednews = $busca_speednews->fetch()){
                ?>
                    <article class="speedNews-article position-relative">
                        <img class="speedNews-thumb" src="<?php echo $exibe_speednews['thumb']; ?>" loading="lazy" alt="Thumb da Speed News">
                        <p class="speedNews-text position-absolute"><span>#<?php echo $exibe_speednews['hashtag']; ?></span> <?php echo $exibe_speednews['conteudo']; ?></p>
                        <div class="speedNews-credits position-absolute"><i class="bi bi-person-circle"></i>&nbsp;<?php echo $exibe_speednews['autor']; ?> | <i class="bi bi-calendar-date-fill"></i>&nbsp;<?php echo $exibe_speednews['data']; ?></div>
                        <button class="speedNews-view btn p-0 border-0 position-absolute" aria-label="Visualizar imagem"><i class="bi bi-eye-fill"></i></button>
                    </article>
                <?php } ?>
                </section>
                <div class="speedNews-plus w-100 d-flex justify-content-center mb-4">
                    <button onclick="history.pushState('speednews', 'speednews', '/canal_start/speednews/'); router();" type="button" class="btn btn-primary text-uppercase" aria-label="Mais speed news"><i class="bi bi-plus-lg"></i> Exibir mais speedNews</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="schedule pt-4 pb-4" style="background-image: url('<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/img/bg-mid.blue.webp');">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
                <section class="schedule-section">
                    <h6 class="schedule-title text-center text-uppercase">Programas em destaques</h6>
                    <div class="schedule-container d-flex gap-3 justify-content-center flex-wrap mt-4">
                    <?php
                        $busca_programacao = $conn->prepare("SELECT * FROM programacao WHERE destaque='sim' ORDER BY id DESC LIMIT 4");
                        $busca_programacao->execute();

                        while($exibe_programacao = $busca_programacao->fetch()){
                    ?>
                        <div class="schedule-content p-3">
                            <img class="schedule-contentThumb rounded-circle" src="<?php echo $exibe_programacao['thumb']; ?>" loading="lazy" alt="Thumb do programa">
                            <h5 class="schedule-contentTitle text-uppercase"><?php echo $exibe_programacao['nome']; ?></h5>
                            <h6 class="schedule-contentClock"><?php echo $exibe_programacao['horario']; ?></h6>
                        </div>
                    <?php } ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<div class="originals pt-4 pb-4" style="background-image: url('<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/img/bg-mid.red.webp'); background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
                <section class="originals-section">
                    <h6 class="originals-title text-center text-uppercase">Conteúdos Originais</h6>
                    <div class="originals-container d-flex justify-content-center gap-4 mt-4">
                    <?php
                        $busca_originais = $conn->prepare("SELECT * FROM originais ORDER BY id DESC LIMIT 2");
                        $busca_originais->execute();

                        while($exibe_originais = $busca_originais->fetch()){
                    ?>
                        <div class="originals-content">
                            <iframe class="rumble" src="<?php echo $exibe_originais['video']; ?>" frameborder="0" allowfullscreen></iframe>
                            <h6 class="originals-contentTitle text-uppercase mt-2 w-100"><a href="/canal_start/originais/<?php echo $exibe_originais['tag_url']; ?>" title="<?php echo $exibe_originais['nome']; ?>"><?php echo $exibe_originais['nome']; ?></a> | <?php echo $exibe_originais['data']; ?></h6>
                        </div>
                    <?php } ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<div class="where pt-4 pb-4" style="background-image: url('<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/img/bg-mid.blue.webp');">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
                <section class="where-section">
                    <h6 class="where-title text-center text-uppercase">Onde nos encontrar?</h6>
                    <div class="where-container d-flex gap-5 flex-wrap justify-content-center mt-4">~
                    <?php
                        $busca_divulgacao = $conn->prepare("SELECT * FROM divulgacao ORDER BY id DESC LIMIT 2");
                        $busca_divulgacao->execute();

                        while($exibe_divulgacao = $busca_divulgacao->fetch()){
                    ?>
                        <a href="<?php echo $exibe_divulgacao['url']; ?>" title="<?php echo $exibe_divulgacao['nome']; ?>" target="_blank"><img class="where-thumb" src="<?php echo $exibe_divulgacao['logo']; ?>" alt="Logo <?php echo $exibe_divulgacao['nome']; ?>"></a>
                    <?php } ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<div class="about pt-4 pb-4" style="background-image: url('<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/img/bg-mid.red.webp');">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
                <section class="about-section">
                    <h6 class="about-title text-center text-uppercase">Sobre o canal start</h6>
                    <p class="about-text text-center m-0 mt-4">
                    START é um canal OTT Streaming TV transmitindo 24h pela internet, ou seja, somos um canal de televisão brasileiro e gamer de abrangência global! Os conteúdos apresentados se expandem ao universo otaku, geek, nerd e tech. A programação ao vivo do START pode ser acompanhada gratuitamente em nosso site oficial (canalstart.games) juntamente à conteúdos On Demand exclusivos, além das últimas notícias geeks.
                    </p>
                </section>
            </div>
        </div>
    </div>
</div>
