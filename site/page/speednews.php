<script async defer>
    //Tema da página
     switch(Cookies.get('theme')){
        case 'dark':
            $('.body').css({'background-color': '#393939'});
            $('.speedNews').css({"background-color": "#393939"});
            $('.speedNews-show > p, .speedNews-show > p > span, .speedNews-show > span').css({'color': '#ffffff'});
        break;
        default:
            $('.body').css({'background-color': ''});
            $('.speedNews').css({"background-color": ""});
            $('.speedNews-show > p, .speedNews-show > p > span, .speedNews-show > span').css({'color': ''});
        break;
    }

    //Alterações da página
    $('.player').css({'height': '0'});
    $('.player-leftSide, .player-rightSide').css({'display': 'none'});
    $('.btn-theme').hide();

    $('.player-video').css({
        'width': '17rem',
        'height': '10rem',
        'position': 'fixed',
        'right': '1rem',
        'bottom': '1rem',
        'margin': 'auto',
        'z-index': '1'
    }).draggable();

    if(window.screen.width < '920'){
        $('.player-video').css({
            'height': '20rem',
            'bottom': '0.2rem',
            'right': '0.5rem'
        });
    }
</script>


<?php 
    $url =  $_SERVER["REQUEST_URI"];
    $urlExplode = explode('/', $url);
    $urlParameter =  $urlExplode[5]; //Parametro único da página ( Verifica se o conteúdo é lista ou postagem completa )
?>

<?php if(empty($urlParameter)){ ?>
<script async defer>
    $('title').text('Canal START | Speed News');
</script>
<div class="speedNews">
    <div class="container mt-lg-5">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
                <section class="speedNews-section d-flex flex-wrap gap-3 justify-content-center mt-4 mb-4">
                    <article class="speedNews-article position-relative">
                        <img class="speedNews-thumb" src="https://image.api.playstation.com/vulcan/ap/rnd/202206/0719/qpAUFYXSVRlSN0Z1MSKXPu92.jpg" loading="lazy" alt="Thumb da speednews">
                        <p class="speedNews-text position-absolute"><span>#Teste de Hashtag</span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable E</p>
                        <span class="speedNews-credits position-absolute"><i class="bi bi-person-circle"></i>&nbsp;Takashi | <i style="font-size: 0.98rem" class="bi bi-calendar-date-fill"></i>&nbsp;00/00/0000</span>
                        <button class="speedNews-view btn p-0 border-0 position-absolute" aria-label="Visualizar imagem"><i class="bi bi-eye-fill"></i></button>
                    </article>
                    <article class="speedNews-article position-relative">
                        <img class="speedNews-thumb" src="https://cineclick-static.flixmedia.cloud/1280/cf70826d-b827-49e6-8b35-b1bb5f7866aa.webp" loading="lazy" alt="Thumb da speednews">
                        <p class="speedNews-text position-absolute"><span>#Teste de Hashtag</span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable E</p>
                        <span class="speedNews-credits position-absolute"><i class="bi bi-person-circle"></i>&nbsp;Takashi | <i style="font-size: 0.98rem" class="bi bi-calendar-date-fill"></i>&nbsp;00/00/0000</span>
                        <button class="speedNews-view btn p-0 border-0 position-absolute" aria-label="Visualizar imagem"><i class="bi bi-eye-fill"></i></button>
                    </article>
                    <article class="speedNews-article position-relative">
                        <img class="speedNews-thumb" src="https://cineclick-static.flixmedia.cloud/1280/cf70826d-b827-49e6-8b35-b1bb5f7866aa.webp" loading="lazy" alt="Thumb da speednews">
                        <p class="speedNews-text position-absolute"><span>#Teste de Hashtag</span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable E</p>
                        <span class="speedNews-credits position-absolute"><i class="bi bi-person-circle"></i>&nbsp;Takashi | <i style="font-size: 0.98rem" class="bi bi-calendar-date-fill"></i>&nbsp;00/00/0000</span>
                        <button class="speedNews-view btn p-0 border-0 position-absolute" aria-label="Visualizar imagem"><i class="bi bi-eye-fill"></i></button>
                    </article>
                    <article class="speedNews-article position-relative">
                        <img class="speedNews-thumb" src="https://cineclick-static.flixmedia.cloud/1280/cf70826d-b827-49e6-8b35-b1bb5f7866aa.webp" loading="lazy" alt="Thumb da speednews">
                        <p class="speedNews-text position-absolute"><span>#Teste de Hashtag</span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable E</p>
                        <span class="speedNews-credits position-absolute"><i class="bi bi-person-circle"></i>&nbsp;Takashi | <i style="font-size: 0.98rem" class="bi bi-calendar-date-fill"></i>&nbsp;00/00/0000</span>
                        <button class="speedNews-view btn p-0 border-0 position-absolute" aria-label="Visualizar imagem"><i class="bi bi-eye-fill"></i></button>
                    </article>
                </section>
            </div>
        </div>
    </div>
</div>
<?php } else {?>
<div class="container mt-5 mt-lg-5">
    <div class="row d-flex justify-content-center">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xll-8">
            <section class="speedNews-show mt-lg-4 mb-4">
                <img src="https://cineclick-static.flixmedia.cloud/1280/cf70826d-b827-49e6-8b35-b1bb5f7866aa.webp" alt="Thumb da Speed News">
                <p class="mt-3"><span>#Teste de Hashtag</span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable E</p>
                <span><i class="bi bi-person-circle"></i>&nbsp;Takashi | <i style="font-size: 0.98rem" class="bi bi-calendar-date-fill"></i>&nbsp;00/00/0000</span>
            </section>
        </div>
    </div>
</div>
<?php } ?>