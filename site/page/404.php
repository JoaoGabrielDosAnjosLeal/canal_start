<script defer>
    //Tema da página
     switch(Cookies.get('theme')){
        case 'dark':
            $('.body').css({'background-color': '#393939'});
            $('.erro404-title, .erro404-text').css({'color': '#ffffff'});
        break;
        default:
            $('.body').css({'background-color': ''});
            $('.erro404-title, .erro404-text').css({'color': ''});
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

<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 col-xll-7">
            <section class="erro404 d-flex flex-wrap justify-content-center mt-5 mb-5">
                <img class="erro404-thumb" src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/img/erro404.black.webp" alt="Erro 404 Thumb">
                <h6 class="erro404-title text-uppercase text-center w-100 mt-3">Game over!</h6>
                <p class="erro404-text w-100 text-center">Calma ou senão é gamer over pra você! A página que você tentou acessar não existe, vá para a página inicial para aproveitar o melhor do CANAL START!</p>
                <button class="erro404-btn btn btn-primary text-uppercase" onclick="history.pushState('home', 'home', '/canal_start'); router();"><i class="bi bi-house-fill"></i>&nbsp;Ir pra página inicial</button>
            </section>
        </div>
    </div>
</div>