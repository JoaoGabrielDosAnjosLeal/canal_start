<?php include('include/header.php'); ?>

<div class="player">
    <img class="player-leftSide" src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/img/bg-player.left.webp" alt="Fundo lado esquerdo">
    <img class="player-rightSide float-end" src="<?php $_SERVER['HTTP_HOST'];?>/canal_start/site/assets/img/bg-player.right.webp" alt="Fundo lado direito">
        <video id="my-video" class="player-video video-js" controls autoplay muted poster="https://cineclick-static.flixmedia.cloud/1280/cf70826d-b827-49e6-8b35-b1bb5f7866aa.webp" data-setup="{}">
            <source src="https://stmv1.srvif.com/canalstart/canalstart/playlist.m3u8" type="application/x-mpegURL" />
        </video>
</div>

<div class="speedNews">
    <nav class="speedNews-navbar navbar w-100">
        <div class="speedNews-container container-fluid mx-auto">
            <h6 class="speedNews-title navbar-brand text-center text-uppercase">Speed News</h6>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
                <section class="speedNews-section d-flex flex-wrap gap-3 justify-content-center mt-4 mb-4">
                    <article class="speedNews-article position-relative">
                        <img class="speedNews-thumb" src="https://image.api.playstation.com/vulcan/ap/rnd/202206/0719/qpAUFYXSVRlSN0Z1MSKXPu92.jpg" loading="lazy" alt="Thumb da speednews">
                        <p class="speedNews-text position-absolute"><span>#Teste de Hashtag</span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable E</p>
                        <span class="speedNews-credits position-absolute"><i class="bi bi-person-circle"></i>&nbsp;Takashi | <i style="font-size: 0.98rem" class="bi bi-calendar-date-fill"></i>&nbsp;2 de Junho</span>
                        <button class="speedNews-view btn p-0 border-0 position-absolute" aria-label="Visualizar imagem"><i class="bi bi-eye-fill"></i></button>
                    </article>
                    <article class="speedNews-article position-relative">
                        <img class="speedNews-thumb" src="https://tribunapr.uol.com.br/wp-content/uploads/sites/56/2022/11/30145253/super-mario-bros-o-filme-trailer-e-data-de-estreia-970x550.jpg" loading="lazy"  alt="Thumb da speednews">
                        <p class="speedNews-text position-absolute"><span>#Teste de Hashtag</span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable E</p>
                        <span class="speedNews-credits position-absolute"><i class="bi bi-person-circle"></i>&nbsp;Takashi | <i style="font-size: 0.98rem" class="bi bi-calendar-date-fill"></i>&nbsp;2 de Junho</span>
                        <button class="speedNews-view btn p-0 border-0 position-absolute" aria-label="Visualizar imagem"><i class="bi bi-eye-fill"></i></button>
                    </article>
                    <article class="speedNews-article position-relative">
                        <img class="speedNews-thumb" src="https://tribunapr.uol.com.br/wp-content/uploads/sites/56/2022/11/30145253/super-mario-bros-o-filme-trailer-e-data-de-estreia-970x550.jpg" loading="lazy"  alt="Thumb da speednews">
                        <p class="speedNews-text position-absolute"><span>#Teste de Hashtag</span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable E</p>
                        <span class="speedNews-credits position-absolute"><i class="bi bi-person-circle"></i>&nbsp;Takashi | <i style="font-size: 0.98rem" class="bi bi-calendar-date-fill"></i>&nbsp;2 de Junho</span>
                        <button class="speedNews-view btn p-0 border-0 position-absolute" aria-label="Visualizar imagem"><i class="bi bi-eye-fill"></i></button>
                    </article>
                    <article class="speedNews-article position-relative">
                        <img class="speedNews-thumb" src="https://tribunapr.uol.com.br/wp-content/uploads/sites/56/2022/11/30145253/super-mario-bros-o-filme-trailer-e-data-de-estreia-970x550.jpg" loading="lazy"  alt="Thumb da speednews">
                        <p class="speedNews-text position-absolute"><span>#Teste de Hashtag</span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable E</p>
                        <span class="speedNews-credits position-absolute"><i class="bi bi-person-circle"></i>&nbsp;Takashi | <i style="font-size: 0.98rem" class="bi bi-calendar-date-fill"></i>&nbsp;2 de Junho</span>
                        <button class="speedNews-view btn p-0 border-0 position-absolute" aria-label="Visualizar imagem"><i class="bi bi-eye-fill"></i></button>
                    </article>
                </section>
            </div>
        </div>
    </div>
</div>

<div class="schedule pt-4 pb-4" style="background-image: url('https://i.imgur.com/Rug7Aag.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
                <section class="schedule-section">
                    <h6 class="schedule-title text-center text-uppercase">Programas em destaques</h6>
                    <div class="schedule-container d-flex gap-3 flex-wrap mt-4">
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

<div class="originals pt-4 pb-4" style="background-image: url('https://i.imgur.com/mo2zZa8.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
                <section class="originals-section">
                    <h6 class="originals-title text-center text-uppercase">Originais</h6>
                    <div class="originals-container d-flex gap-4 mt-4">
                        <iframe class="rumble" width="100%" height="360" src="https://rumble.com/embed/v1z219o/?pub=4" frameborder="0" allowfullscreen></iframe>
                        <iframe class="rumble" width="100%" height="360" src="https://rumble.com/embed/v1z219o/?pub=4" frameborder="0" allowfullscreen></iframe>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>