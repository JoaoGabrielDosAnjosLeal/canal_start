<?php if($url_explode[4] == "novo"){?>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <h6 class="page-start mt-2">
                Cadastrar novo original
            </h6>
            <section class="originalEdit mt-4 mb-4">
                <form class="originalEdit-form" action="javascript: original_cadastra();">
                    <div class="mb-3">
                        <label for="nome" class="form-label"><i class="bi bi-chat-right-dots"></i>&nbsp;Nome do original</label>
                        <input type="text" name="nome" class="form-control shadow-none border-dark" id="nome" placeholder="Digite o título do original" required>
                    </div>
                    <div class="mb-3">
                        <label for="tag" class="form-label"><i class="bi bi-hash"></i>&nbsp;Tag do original</label>
                        <input type="text" name="tag" class="form-control shadow-none border-dark" id="tag" placeholder="Digite a tag do original" required>
                    </div>
                    <div class="mb-4">
                        <label for="video" class="form-label"><i class="bi bi-share"></i>&nbsp;URL do vídeo</label>
                        <input type="text" class="form-control shadow-none border-dark" id="video" name="video" placeholder="Digite o URL do iframe Rumble" required>
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
    $busca_original = $conn->prepare("SELECT * FROM originais WHERE id=:originalId");
    $busca_original->bindParam(":originalId", $id);
    $busca_original->execute();
    $resultado_busca_original = $busca_original->fetch();    
?>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <h6 class="page-start mt-2">
                Editar original
            </h6>
            <section class="originalEdit mt-4 mb-4">
                <form class="originalEdit-form" action="javascript: original_editar();">
                    <input type="text" name="id" class="d-none" id="id" value="<?php echo $resultado_busca_original['id']; ?>">
                    <div class="mb-3">
                        <label for="nome" class="form-label"><i class="bi bi-chat-right-dots"></i>&nbsp;Nome do original</label>
                        <input type="text" name="nome" class="form-control shadow-none border-dark" id="nome" value="<?php echo $resultado_busca_original['nome']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tag" class="form-label"><i class="bi bi-hash"></i>&nbsp;Tag do original</label>
                        <input type="text" name="tag" class="form-control shadow-none border-dark" id="tag" value="<?php echo $resultado_busca_original['tag']; ?>">
                    </div>
                    <div class="mb-4">
                        <label for="video" class="form-label"><i class="bi bi-share"></i>&nbsp;URL do vídeo</label>
                        <input type="text" class="form-control shadow-none border-dark" id="video" name="video" value="<?php echo $resultado_busca_original['video']; ?>">
                    </div>
                    <button type="submit" class="btn text-uppercase"><i class="bi bi-send"></i>&nbsp;Editar</button>
                </form>
            </section>
        </div>
    </div>
</div>
<?php } ?>

<?php if($url_explode[4] == "lista"){
    
    $busca_posts = "SELECT * FROM originais ORDER BY id DESC";
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
                Todos os originais
            </h6>
            <section class="originalList d-flex gap-3 flex-wrap mt-4 mb-4">
            <?php while($exibe_originais = $limite_query->fetch()){ ?>
                <div class="pb-3">
                    <iframe class="rumble" src="<?php echo $exibe_originais['video']; ?>" frameborder="0" allowfullscreen></iframe>
                    <h5 class="text-center mt-3 m-0"><?php echo $exibe_originais['nome']; ?></h5>
                    <h6 class="text-center mt-2 mb-4 m-0">Tag: <?php echo $exibe_originais['tag']; ?></h6>
                    <button onclick="window.location.href='/canal_start/painel/originais/editar/<?php echo $exibe_originais['id']; ?>'; " class="btn shadow-none border-0 p-0 float-end"><i class="bi bi-pen-fill"></i></button>
                    <button onclick="window.location.href='/canal_start/admin/validation/originais.php?model=delete&id=<?php echo $exibe_originais['id']; ?>';" class="btn shadow-none border-0 p-0 float-end"><i class="bi bi-trash-fill"></i></button>
                </div>
            <?php } ?>
            </section>
            <nav class="mt-3">
                <ul class="pagination">
                    <?php if($pagina > 1){ ?><li class="page-item"><a class="page-link shadow-none" href="/canal_start/painel/originais/lista/<?php echo $voltar_pagina; ?>">Página anterior</a></li><?php } ?>
                    <li class="page-item"><a class="page-link shadow-none" href="/canal_start/painel/originais/lista/<?php echo $proxima_pagina; ?>">Próxima Página</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<?php } ?>