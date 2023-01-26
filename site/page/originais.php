<?php 
    include('../../connect.php');
?>
<script defer>
    //Tema da página
     switch(Cookies.get('theme')){
        case 'dark':
            $('.body').css({'background-color': '#393939'});
            $('.originals-title, .originals-contentTitle, .originals-contentTitle > a').css({'color': '#ffffff'});
        break;
        default:
            $('.body').css({'background-color': ''});
            $('.originals-title, .originals-contentTitle, .originals-contentTitle > a').css({'color': '#dc0000'});
        break;
    }

    $('.originals-title').css({'font-size': '2rem'});

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
    $('title').text('Canal START | Originais');
</script>
<div class="container">
    <div class="row mt-lg-4">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="originals-section mt-4 mt-lg-5 mb-4">
                <h6 class="originals-title text-center text-uppercase">Todos os Originais</h6>
                <div class="originals-container d-flex justify-content-center gap-4 mt-4">
                <?php
                    $busca_originais = $conn->prepare("SELECT * FROM originais ORDER BY id DESC LIMIT 2");
                    $busca_originais->execute();

                    while($exibe_originais = $busca_originais->fetch()){
                ?>
                    <div class="originals-content">
                        <iframe class="rumble" src="<?php echo $exibe_originais['video']; ?>" frameborder="0" allowfullscreen></iframe>
                        <h6 class="originals-contentTitle text-uppercase mt-2 w-100"><a href="<?php echo $exibe_originais['tag_url']; ?>" title="<?php echo $exibe_originais['nome']; ?>"><?php echo $exibe_originais['nome']; ?></a> | <?php echo $exibe_originais['data']; ?></h6>
                    </div>
                <?php } ?>
                </div>
            </section>
        </div>
    </div>
</div>
<?php } else {
    $url =  $_SERVER["REQUEST_URI"];
    $url_explode = explode('/', $url);    

    $url_target = $url_explode[5];

    $busca_originais = $conn->prepare("SELECT * FROM originais");
    $busca_originais->bindParam(":originaisUrl", $url_target);
    $busca_originais->execute();

    $resultado_busca_originais = $busca_originais->fetch();
?>
<div class="container">
<script async defer>
    $('title').text('Canal START | <?php echo $resultado_busca_originais['tag']; ?>');
</script>
    <div class="row mt-lg-4">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="originals-section mt-4 mt-lg-5 mb-4">
                <h6 class="originals-title text-center text-uppercase"><?php echo $resultado_busca_originais['tag']; ?></h6>
                <div class="originals-container d-flex justify-content-start flex-wrap gap-4 mt-4">
                <?php
                    $busca_originais = $conn->prepare("SELECT * FROM originais");
                    $busca_originais->bindParam(":originaisUrl", $url_target);
                    $busca_originais->execute();

                    while($exibe_originais = $busca_originais->fetch()){
                ?>
                    <div class="originals-content">
                        <iframe class="rumble" src="<?php echo $exibe_originais['video']; ?>" frameborder="0" allowfullscreen></iframe>
                        <h6 class="originals-contentTitle text-uppercase mt-2 w-100"><a href="<?php echo $exibe_originais['tag_url']; ?>" title="<?php echo $exibe_originais['nome']; ?>"><?php echo $exibe_originais['nome']; ?></a> | <?php echo $exibe_originais['data']; ?></h6>
                    </div>
                <?php } ?>
                </div>
            </section>
        </div>
    </div>
</div>
<?php } ?>
