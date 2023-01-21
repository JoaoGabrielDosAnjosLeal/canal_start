<?php if($url_explode[4] == "novo"){?>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <h6 class="page-start mt-2">
                Cadastrar speed news
            </h6>
            <section class="speedNewsEdit mt-4 mb-4">
                <form class="speedNewsEdit-form" action="javascript: speedNews_create();" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="titulo" class="form-label"><i class="bi bi-chat-right-dots"></i>&nbsp;Título da speed news</label>
                        <input type="text" name="titulo" class="form-control shadow-none border-dark" id="titulo" placeholder="Crie um título chamativo" required>
                    </div>
                    <div class="mb-4">
                        <label for="hashtag" class="form-label"><i class="bi bi-hash"></i>&nbsp;Hashtag da speed news</label>
                        <input type="text" name="hashtag" class="form-control shadow-none border-dark" id="hashtag" placeholder="Crie uma hashtag compatível com o conteúdo" required>
                    </div>
                    <div class="mb-4">
                        <label for="conteudo" class="form-label"><i class="bi bi-text-left"></i>&nbsp;Conteúdo do speed news</label>
                        <textarea name="conteudo" class="form-control shadow-none border-dark" id="conteudo" rows="10" maxLength="300" placeholder="Seja criativo mas lembre-se somente 300 caracteres!" required></textarea>
                    </div>
                    <hr>
                    <div class="mb-4">
                        <label for="thumb" class="form-label"><i class="bi bi-image"></i>&nbsp;Thumb da speed news</label>
                        <input type="file" class="form-control shadow-none border-dark" id="thumb" name="thumb" required>
                    </div>
                    <button type="submit" class="btn text-uppercase"><i class="bi bi-send"></i>&nbsp;Cadastrar</button>
                </form>
            </section>
        </div>
    </div>
</div>
<?php } ?>

<?php 
if($url_explode[4] == "editar"){
    $id = $url_explode[5];
    $busca_post = $conn->prepare("SELECT * FROM speed_news WHERE id=:postId");
    $busca_post->bindParam(":postId", $id);
    $busca_post->execute();
    $resultado_busca_post = $busca_post->fetch();
?>
    <div class="container-fluid mb-5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <h6 class="page-start mt-2">
                Editar speed news
            </h6>
            <section class="speedNewsEdit mt-4 mb-4">
                <form class="speedNewsEdit-form" action="javascript: speedNews_edit();" enctype="multipart/form-data">
                    <input type="text" name="id" class="d-none" value="<?php echo $resultado_busca_post['id']; ?>">
                    <div class="mb-3">
                        <label for="titulo" class="form-label"><i class="bi bi-chat-right-dots"></i>&nbsp;Título da speed news</label>
                        <input type="text" name="titulo" class="form-control shadow-none border-dark" id="titulo" value="<?php echo $resultado_busca_post['titulo']; ?>">
                    </div>
                    <div class="mb-4">
                        <label for="hashtag" class="form-label"><i class="bi bi-hash"></i>&nbsp;Hashtag da speed news</label>
                        <input type="text" name="hashtag" class="form-control shadow-none border-dark" id="hashtag" value="<?php echo $resultado_busca_post['hashtag']; ?>">
                    </div>
                    <div class="mb-4">
                        <label for="conteudo" class="form-label"><i class="bi bi-text-left"></i>&nbsp;Conteúdo do speed news</label>
                        <textarea name="conteudo" class="form-control shadow-none border-dark" id="conteudo" rows="10" maxlenght="300"><?php echo $resultado_busca_post['conteudo']; ?></textarea>
                    </div>
                    <hr>
                    <div class="mb-4">
                        <label for="thumb" class="form-label"><i class="bi bi-image"></i>&nbsp;Thumb da speed news</label>
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
    
    $busca_posts = "SELECT * FROM speed_news ORDER BY id DESC";
    $exibir = "4";

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
                Todos os speed news
            </h6>
            <section class="speedNews-list d-flex gap-3 flex-wrap mt-4">
            <?php while($exibe_speed_news = $limite_query->fetch()){?>
                <article class="position-relative">
                    <img src="<?php echo $exibe_speed_news['thumb']; ?>" loading="lazy" alt="Thumb da Speed News">
                    <p class="position-absolute"><span>#<?php echo $exibe_speed_news['hashtag']; ?></span> <?php echo $exibe_speed_news['conteudo']; ?></p>
                    <div class="position-absolute"><i class="bi bi-person-circle"></i>&nbsp;<?php echo $exibe_speed_news['autor']; ?> | <i class="bi bi-calendar-date-fill"></i>&nbsp;<?php echo $exibe_speed_news['data']; ?></div>
                    <button onclick="window.location.href='editar/<?php echo $exibe_speed_news['id']; ?>';" class="btn p-0 border-0 position-absolute"><i class="bi bi-pen-fill"></i></button>
                    <button onclick="window.location.href='/canal_start/admin/validation/speednews.php?model=delete&id=<?php echo $exibe_speed_news['id']; ?>';" class="btn btn-danger p-0 border-0 position-absolute"><i class="bi bi-trash3-fill"></i></button>
                </article>
            <?php } ?>
            </section>
            <nav class="mt-3">
                <ul class="pagination">
                    <?php if($pagina > 1){ ?><li class="page-item"><a class="page-link shadow-none" href="/canal_start/painel/speednews/lista/<?php echo $voltar_pagina; ?>">Página anterior</a></li><?php } ?>
                    <li class="page-item"><a class="page-link shadow-none" href="/canal_start/painel/speednews/lista/<?php echo $proxima_pagina; ?>">Próxima Página</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<?php } ?>