<script defer>
    $('title').text('START | Programação');

    //Tema da página
     switch(Cookies.get('theme')){
        case 'dark':
            $('.body').css({'background-color': '#393939'});
        break;
        default:
            $('.body').css({'background-color': ''});
            $('.schedule-title, .schedule-contentTitle, .schedule-contentClock').css({'color': '#003399'});
            $('.schedule-content').css({'border': '0.15rem solid #dc0000'});
        break;
    }

    $('.schedule-title').css({'font-size': '2rem'});

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

<div class="container">
    <div class="row mt-lg-4">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="schedule-section mt-4 mt-lg-5">
                <h6 class="schedule-title text-center text-uppercase">Segunda a sexta</h6>
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
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="schedule-section mt-4 mb-4">
                <h6 class="schedule-title text-center text-uppercase">Fim de semana</h6>
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