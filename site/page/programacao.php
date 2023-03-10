<?php 
    include('../../connect.php');
?>
<script defer>
    $('title').text('Canal START | Programação');

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
                <div class="schedule-container d-flex gap-3 justify-content-start flex-wrap mt-4">
                <?php
                    $busca_programacao_semanal = $conn->prepare("SELECT * FROM programacao WHERE periodo='durante a semana' ORDER BY id DESC");
                    $busca_programacao_semanal->execute();

                    while($exibe_programacao_semanal = $busca_programacao_semanal->fetch()){
                ?>
                    <div class="schedule-content p-3">
                        <img class="schedule-contentThumb rounded-circle" src="<?php echo $exibe_programacao_semanal['thumb']; ?>" loading="lazy" alt="Thumb do programa">
                        <h5 class="schedule-contentTitle text-uppercase"><?php echo $exibe_programacao_semanal['nome']; ?></h5>
                        <h6 class="schedule-contentClock"><?php echo $exibe_programacao_semanal['horario']; ?></h6>
                    </div>
                <?php } ?>
                </div>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <section class="schedule-section mt-4 mb-4">
                <h6 class="schedule-title text-center text-uppercase">Fim de semana</h6>
                <div class="schedule-container d-flex gap-3 justify-content-start flex-wrap mt-4">
                <?php
                    $busca_programacao_semanal = $conn->prepare("SELECT * FROM programacao WHERE periodo='fim de semana' ORDER BY id DESC");
                    $busca_programacao_semanal->execute();

                    while($exibe_programacao_semanal = $busca_programacao_semanal->fetch()){
                ?>
                    <div class="schedule-content p-3">
                        <img class="schedule-contentThumb rounded-circle" src="<?php echo $exibe_programacao_semanal['thumb']; ?>" loading="lazy" alt="Thumb do programa">
                        <h5 class="schedule-contentTitle text-uppercase"><?php echo $exibe_programacao_semanal['nome']; ?></h5>
                        <h6 class="schedule-contentClock"><?php echo $exibe_programacao_semanal['horario']; ?></h6>
                    </div>
                <?php } ?>
                </div>
            </section>
        </div>
    </div>
</div>