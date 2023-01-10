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
    $urlParameter =  $urlExplode[5]; //Parametro único da página ( Tag da categoria )
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
                    <!--Foi criada a classe "originals-internalTitle" para que somente os titulos fora de destaque fossem alterados na mudança de tema-->
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
<?php } else {?>
<div class="container">
<script async defer>
    $('title').text('Canal START | Titulo da tag');
</script>
    <div class="row mt-lg-4">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="originals-section mt-4 mt-lg-5 mb-4">
                <h6 class="originals-title text-center text-uppercase">Nome da categoria</h6>
                <div class="originals-container d-flex justify-content-center gap-4 mt-4">
                    <!--Foi criada a classe "originals-internalTitle" para que somente os titulos fora de destaque fossem alterados na mudança de tema-->
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
<?php } ?>
