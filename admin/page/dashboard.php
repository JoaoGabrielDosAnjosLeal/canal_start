<div class="container mb-5">
    <div class="row display-flex justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <h6 class="page-start mt-2">
                Dashboard
            </h6>
            <section class="wellcome p-4 mt-3">
                <h4 class="m-0">Seja bem vindo <?php echo $exibe_busca_user['apelido']; ?></h4>
                <h5>Por aqui você controla todo o site e conteúdo do canal START!</h5>
                <h6 class="mt-5">Vamos começar os trabalhos?</h6>
                <a href="#"><button type="button" class="btn border-0"><i class="bi bi-gear-fill"></i>&nbsp;Editar aparência do site</button></a>
            </section>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 col-xll-7">
            <section class="player">
                <h6 class="text-uppercase m-0"><i class="bi bi-tv-fill"></i>&nbsp;No ar agora:</h6>
                <video id="my-video" class="video-js" controls autoplay muted data-setup="{}">
                    <source src="https://stmv1.srvif.com/canalstart/canalstart/playlist.m3u8" type="application/x-mpegURL" />
                </video>
            </section>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xll-5">
            <section class="server mt-3 mt-lg-0">
                <h6 class="text-uppercase m-0"><i class="bi bi-hdd-stack-fill"></i>&nbsp;Dados do servidor:</h6>
                <p>
                    <b>Domínio:</b> <?php echo $_SERVER['HTTP_HOST'];?><br>
                    <b>Hospedagem:</b> Hostinger<br>
                    <b>Plano de hospedagem:</b> Básico<br>
                    <b>Versão do PHP:</b> 8.0<br>
                    <b>SSL:</b> Ativado<br>
                    <b>Streaming:</b> Advanced Host<br>
                    <b>Qualidade de vídeo:</b> 720p<br>
                    <b>Plano de streaming:</b> Básico<br>
                </p>
            </section>
        </div>
    </div>
</div>
