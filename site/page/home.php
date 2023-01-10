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
                    <article class="speedNews-article position-relative">
                        <img class="speedNews-thumb" src="https://image.api.playstation.com/vulcan/ap/rnd/202206/0719/qpAUFYXSVRlSN0Z1MSKXPu92.jpg" loading="lazy" alt="Thumb da Speed News">
                        <p class="speedNews-text position-absolute"><span>#Teste de Hashtag</span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable E</p>
                        <div class="speedNews-credits position-absolute"><i class="bi bi-person-circle"></i>&nbsp;Takashi | <i class="bi bi-calendar-date-fill"></i>&nbsp;00/00/0000</div>
                        <button class="speedNews-view btn p-0 border-0 position-absolute" aria-label="Visualizar imagem"><i class="bi bi-eye-fill"></i></button>
                    </article>
                    <article class="speedNews-article position-relative">
                        <img class="speedNews-thumb" src="https://cineclick-static.flixmedia.cloud/1280/cf70826d-b827-49e6-8b35-b1bb5f7866aa.webp" loading="lazy" alt="Thumb da Speed News">
                        <p class="speedNews-text position-absolute"><span>#Teste de Hashtag</span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable E</p>
                        <div class="speedNews-credits position-absolute"><i class="bi bi-person-circle"></i>&nbsp;Takashi | <i class="bi bi-calendar-date-fill"></i>&nbsp;00/00/0000</div>
                        <button class="speedNews-view btn p-0 border-0 position-absolute" aria-label="Visualizar imagem"><i class="bi bi-eye-fill"></i></button>
                    </article>
                    <article class="speedNews-article position-relative">
                        <img class="speedNews-thumb" src="https://cineclick-static.flixmedia.cloud/1280/cf70826d-b827-49e6-8b35-b1bb5f7866aa.webp" loading="lazy" alt="Thumb da Speed News">
                        <p class="speedNews-text position-absolute"><span>#Teste de Hashtag</span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable E</p>
                        <div class="speedNews-credits position-absolute"><i class="bi bi-person-circle"></i>&nbsp;Takashi | <i class="bi bi-calendar-date-fill"></i>&nbsp;00/00/0000</div>
                        <button class="speedNews-view btn p-0 border-0 position-absolute" aria-label="Visualizar imagem"><i class="bi bi-eye-fill"></i></button>
                    </article>
                    <article class="speedNews-article position-relative">
                        <img class="speedNews-thumb" src="https://cineclick-static.flixmedia.cloud/1280/cf70826d-b827-49e6-8b35-b1bb5f7866aa.webp" loading="lazy" alt="Thumb da Speed News">
                        <p class="speedNews-text position-absolute"><span>#Teste de Hashtag</span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable E</p>
                        <div class="speedNews-credits position-absolute"><i class="bi bi-person-circle"></i>&nbsp;Takashi | <i class="bi bi-calendar-date-fill"></i>&nbsp;00/00/0000</div>
                        <button class="speedNews-view btn p-0 border-0 position-absolute" aria-label="Visualizar imagem"><i class="bi bi-eye-fill"></i></button>
                    </article>
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
                        <div class="schedule-content p-3">
                            <img class="schedule-contentThumb rounded-circle" src="https://ptanime.com/wp-content/uploads/2022/05/Megumin-Konosuba-top-20-personagens-mais-magneticos-2016-Charapedia.jpg" loading="lazy" alt="Thumb do programa">
                            <h5 class="schedule-contentTitle text-uppercase">Konosubarashi isekai seikatsu</h5>
                            <h6 class="schedule-contentClock">18h00, 19h00, 20h00, 22h00</h6>
                        </div>
                        <div class="schedule-content p-3">
                            <img class="schedule-contentThumb rounded-circle" src="https://ptanime.com/wp-content/uploads/2022/05/Megumin-Konosuba-top-20-personagens-mais-magneticos-2016-Charapedia.jpg" loading="lazy" alt="Thumb do programa">
                            <h5 class="schedule-contentTitle text-uppercase">Konosubarashi isekai seikatsu</h5>
                            <h6 class="schedule-contentClock">18h00, 19h00, 20h00, 22h00</h6>
                        </div>
                        <div class="schedule-content p-3">
                            <img class="schedule-contentThumb rounded-circle" src="https://ptanime.com/wp-content/uploads/2022/05/Megumin-Konosuba-top-20-personagens-mais-magneticos-2016-Charapedia.jpg" loading="lazy" alt="Thumb do programa">
                            <h5 class="schedule-contentTitle text-uppercase">Konosubarashi isekai seikatsu</h5>
                            <h6 class="schedule-contentClock">18h00, 19h00, 20h00, 22h00</h6>
                        </div>
                        <div class="schedule-content p-3">
                            <img class="schedule-contentThumb rounded-circle" src="https://ptanime.com/wp-content/uploads/2022/05/Megumin-Konosuba-top-20-personagens-mais-magneticos-2016-Charapedia.jpg" loading="lazy" alt="Thumb do programa">
                            <h5 class="schedule-contentTitle text-uppercase">Konosubarashi isekai seikatsu</h5>
                            <h6 class="schedule-contentClock">18h00, 19h00, 20h00, 22h00</h6>
                        </div>
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
                        <div class="originals-content">
                            <iframe class="rumble" width="100%" height="360" src="https://rumble.com/embed/v137ptw/?pub=4" frameborder="0" allowfullscreen></iframe>
                            <h6 class="originals-contentTitle text-uppercase mt-2"><a href="#" title="#">Gameplay na TV - Melhores Momementos</a> | 00/00/0000</h6>
                        </div>
                        <div class="originals-content">
                            <iframe class="rumble" width="100%" height="360" src="https://rumble.com/embed/v137ptw/?pub=4" frameborder="0" allowfullscreen></iframe>
                            <h6 class="originals-contentTitle text-uppercase mt-2"><a href="#" title="#">Gameplay na TV - Melhores Momementos</a> | 00/00/0000</h6>
                        </div>
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
                    <div class="where-container d-flex gap-5 flex-wrap justify-content-center mt-4">
                        <a href="#" title="Rumble" target="_blank"><img class="where-thumb" src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/img/where-rumble.webp" alt="Logo Rumble"></a>
                        <a href="#" title="Youtube" target="_blank"><img class="where-thumb" src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/img/where-youtube.webp" alt="Logo Youtube"></a>
                        <a href="#" title="Twitch" target="_blank"><img class="where-thumb" src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/img/where-twitch.webp" alt="Logo Twitch"></a>
                        <a href="#" title="Facebook" target="_blank"><img class="where-thumb" src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/img/where-facebook.webp" alt="Logo Facebook"></a>
                        <a href="#" title="Twitter" target="_blank"><img class="where-thumb" src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/img/where-twitter.webp" alt="Logo Twitter"></a>
                        <a href="#" title="Instagram" target="_blank"><img class="where-thumb" src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/img/where-instagram.webp" alt="Logo Instagram"></a>
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
