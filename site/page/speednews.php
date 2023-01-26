<?php 
    include('../../connect.php');
?>
<script defer>
    //Tema da página
     switch(Cookies.get('theme')){
        case 'dark':
            $('.body').css({'background-color': '#393939'});
            $('.speedNews').css({"background-color": "#393939"});
            $('.speedNews-showTitle, .speedNews-showText, .speedNews-showCredits, .speedNews-showReactTitle, .speedNews-showReactBtn').css({'color': '#ffffff'});
        break;
        default:
            $('.body').css({'background-color': ''});
            $('.speedNews').css({"background-color": ""});
            $('.speedNews-showTitle, .speedNews-showText, .speedNews-showCredits, .speedNews-showReactTitle, .speedNews-showReactBtn').css({'color': ''});
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
                <section class="speedNews-section d-flex flex-wrap gap-3 justify-content-start mt-4 mb-4">
                <?php
                    $busca_speednews = $conn->prepare("SELECT * FROM speed_news ORDER BY id DESC");
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
            </div>
        </div>
    </div>
</div>
<?php } else { 
    $url =  $_SERVER["REQUEST_URI"];
    $url_explode = explode('/', $url);    

    $url_target = $url_explode[5];

    $busca_speednews = $conn->prepare("SELECT * FROM speed_news WHERE url=:speedNewsUrl");
    $busca_speednews->bindParam(":speedNewsUrl", $url_target);
    $busca_speednews->execute();

    $resultado_busca_speednews = $busca_speednews->fetch()    
?>
<script async defer>
    $('title').text('Canal START | <?php echo $resultado_busca_speednews['titulo']; ?>');
</script>
<div class="container mt-lg-5">
    <div class="row d-flex justify-content-center">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xll-8">
            <section class="speedNews-show mt-4 mb-4">
                <h6 class="speedNews-showTitle text-uppercase"><?php echo $resultado_busca_speednews['titulo']; ?></h6>
                <img class="speedNews-showThumb mt-1" src="<?php echo $resultado_busca_speednews['thumb']; ?>" alt="Thumb do Speed News">
                <p class="speedNews-showText mt-3"><span>#<?php echo $resultado_busca_speednews['hashtag']; ?></span> <?php echo $resultado_busca_speednews['conteudo']; ?></p>
                <div class="speedNews-showCredits">
                    <i class="bi bi-person-circle"></i> <?php echo $resultado_busca_speednews['autor']; ?><br>
                    <i class="bi bi-calendar-date-fill"></i> <?php echo $resultado_busca_speednews['data']; ?>
                </div>
                <h6 class="speedNews-showReactTitle w-100 text-center text-uppercase mt-3">O que você achou desse speed news?</h6>
                <div class="speedNews-showReactContainer d-flex flex-wrap justify-content-center gap-4">
                    <button onclick="react_like();" class="speedNews-showReactBtn btn p-0 border-0"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;<?php echo $resultado_busca_speednews['react_gostei']; ?></button>
                    <button onclick="react_deslike();" class="speedNews-showReactBtn btn p-0 border-0"><i class="bi bi-hand-thumbs-down-fill"></i>&nbsp;<?php echo $resultado_busca_speednews['react_nao_gostei']; ?></button>
                    <button onclick="react_love();" class="speedNews-showReactBtn btn p-0 border-0"><i class="bi bi-heart-fill"></i>&nbsp;<?php echo $resultado_busca_speednews['react_amei']; ?></button>
                    <button onclick="react_sad();" class="speedNews-showReactBtn btn p-0 border-0"><i class="bi bi-emoji-frown-fill"></i>&nbsp;<?php echo $resultado_busca_speednews['react_triste']; ?></button>
                </div>
            </section>
        </div>
    </div>
</div>
<?php } ?>