<?php if($url_explode[4] == "novo"){?>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <h6 class="page-start mt-2">
                Cadastrar novo programa
            </h6>
            <section class="scheduleEdit mt-4 mb-4">
                <form class="scheduleEdit-form" action="javascript: programa_cadastra();" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nome" class="form-label"><i class="bi bi-chat-right-dots"></i>&nbsp;Nome do Programa</label>
                        <input type="text" name="nome" class="form-control shadow-none border-dark" id="nome" placeholder="Digite o título do programa" required>
                    </div>
                    <div class="mb-4">
                        <label for="horario" class="form-label"><i class="bi bi-clock-history"></i>&nbsp;Horários do programa</label>
                        <input type="text" name="horario" class="form-control shadow-none border-dark" id="horario" placeholder="20h00, 22h00, 23h00" required>
                    </div>
                    <div class="mb-4">
                        <label for="periodo" class="form-label"><i class="bi bi-calendar-week"></i>&nbsp;Período de exibição</label>
                        <select name="periodo" id="periodo" class="form-select border-dark shadow-none">
                            <option value="fim de semana">Fim de Semana</option>
                            <option value="durante a semana">Durante a Semana</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="destaque" class="form-label"><i class="bi bi-pin-angle"></i>&nbsp;Destaque</label>
                        <select name="destaque" id="destaque" class="form-select border-dark shadow-none">
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                        </select>
                    </div>
                    <hr>
                    <div class="mb-4">
                        <label for="thumb" class="form-label"><i class="bi bi-image"></i>&nbsp;Thumb do programa</label>
                        <input type="file" class="form-control shadow-none border-dark" id="thumb" name="thumb" required>
                    </div>
                    <button type="submit" class="btn text-uppercase"><i class="bi bi-send"></i>&nbsp;Cadastrar</button>
                </form>
            </section>
        </div>
    </div>
</div>
<?php } ?>

<?php if($url_explode[4] == "editar"){
  $id = $url_explode[5];
  $busca_programacao = $conn->prepare("SELECT * FROM programacao WHERE id=:programacaoId");
  $busca_programacao->bindParam(":programacaoId", $id);
  $busca_programacao->execute();
  $resultado_busca_programacao = $busca_programacao->fetch();    
?>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <h6 class="page-start mt-2">
                Editar programa
            </h6>
            <section class="scheduleEdit mt-4 mb-4">
                <form class="scheduleEdit-form" action="javascript: programa_edita();" enctype="multipart/form-data">
                    <input type="text" name="id" class="d-none" value="<?php echo $resultado_busca_programacao['id']; ?>">
                    <div class="mb-3">
                        <label for="nome" class="form-label"><i class="bi bi-chat-right-dots"></i>&nbsp;Nome do Programa</label>
                        <input type="text" name="nome" class="form-control shadow-none border-dark" id="nome" value="<?php echo $resultado_busca_programacao['nome']; ?>">
                    </div>
                    <div class="mb-4">
                        <label for="horario" class="form-label"><i class="bi bi-clock-history"></i>&nbsp;Horários do programa</label>
                        <input type="text" name="horario" class="form-control shadow-none border-dark" id="horario" value="<?php echo $resultado_busca_programacao['horario']; ?>">
                    </div>
                    <div class="mb-4">
                        <label for="periodo" class="form-label"><i class="bi bi-calendar-week"></i>&nbsp;Período de exibição</label>
                        <select name="periodo" id="periodo" class="form-select border-dark shadow-none">
                            <option value="<?php echo $resultado_busca_programacao['periodo']; ?>">Não Alterar</option>
                            <option value="fim de semana">Fim de Semana</option>
                            <option value="durante a semana">Durante a Semana</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="destaque" class="form-label"><i class="bi bi-pin-angle"></i>&nbsp;Destaque</label>
                        <select name="destaque" id="destaque" class="form-select border-dark shadow-none">
                            <option value="<?php echo $resultado_busca_programacao['destaque']; ?>">Não Alterar</option>
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                        </select>
                    </div>
                    <hr>
                    <div class="mb-4">
                        <label for="thumb" class="form-label"><i class="bi bi-image"></i>&nbsp;Thumb do programa</label>
                        <input type="file" class="form-control shadow-none border-dark" id="thumb" name="thumb">
                    </div>
                    <button type="submit" class="btn text-uppercase"><i class="bi bi-send"></i>&nbsp;Editar</button>
                </form>
            </section>
        </div>
    </div>
</div>
<?php } ?>

<?php if($url_explode[4] == "lista"){

    $busca_posts = "SELECT * FROM programacao ORDER BY id DESC";
    $exibir = "6";

    if(isset($url_explode[5])){
        $pagina = $url_explode[5];
    }else{
        $pagina = "1";
    }

    $inicio = $pagina - 1;
    $inicio = $inicio * $exibir;

    $limite_query = $conn->prepare("$busca_posts LIMIT $inicio, $exibir");
    $limite_query->execute();

    $busca_query = $conn->prepare($busca_posts);
    $busca_query->execute();

    $registros = $busca_query->rowCount();
    $paginas = $registros / $exibir;

    $proxima_pagina = $pagina + 1;
    $voltar_pagina = $pagina - 1;
?>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <h6 class="page-start mt-2">
                Todos os programas
            </h6>
            <section class="scheduleList d-flex gap-3 flex-wrap mt-4 mb-4">
            <?php while($exibe_programacao = $limite_query->fetch()){ ?>
                <div class="pt-3 pb-3">
                    <div class="d-flex justify-content-center"><img class="rounded-circle" src="<?php echo $exibe_programacao['thumb']; ?>"></div>
                    <h5 class="text-center mt-3 m-0"><?php echo $exibe_programacao['nome']; ?></h5>
                    <h6 class="text-center mt-2 mb-4 m-0"><?php echo $exibe_programacao['horario']; ?></h6>
                    <button onclick="window.location.href='/canal_start/painel/programacao/editar/<?php echo $exibe_programacao['id']; ?>'; " class="btn shadow-none border-0 p-0 float-end"><i class="bi bi-pen-fill"></i></button>
                    <button onclick="window.location.href='/canal_start/admin/validation/programacao.php?model=delete&id=<?php echo $exibe_programacao['id']; ?>';" class="btn shadow-none border-0 p-0 float-end"><i class="bi bi-trash-fill"></i></button>
                </div>
            <?php } ?>
            </section>
            <nav class="mt-3">
                <ul class="pagination">
                    <?php if($pagina > 1){ ?><li class="page-item"><a class="page-link shadow-none" href="/canal_start/painel/programacao/lista/<?php echo $voltar_pagina; ?>">Página anterior</a></li><?php } ?>
                    <li class="page-item"><a class="page-link shadow-none" href="/canal_start/painel/programacao/lista/<?php echo $proxima_pagina; ?>">Próxima Página</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<?php } ?>