<?php if($url_explode[4] == "editar"){ 
    $id = $url_explode[5];
    $busca_divulgador = $conn->prepare("SELECT * FROM divulgacao WHERE id=:postId");
    $busca_divulgador->bindParam(":postId", $id);
    $busca_divulgador->execute();
    $resultado_busca_divulgador = $busca_divulgador->fetch();    
?>
    <div class="container-fluid mb-5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <h6 class="page-start mt-2">
                Editar divulgação
            </h6>
            <section class="promoterEdit mt-4">
                <form class="promoterEdit-form" action="javascript: promoter_edit();" enctype="multipart/form-data">
                    <input type="text" name="id" class="d-none" value="#">
                    <div class="mb-3">
                        <label for="nome" class="form-label"><i class="bi bi-pin-angle"></i>&nbsp;Site/Rede Social/Retransmissor</label>
                        <input type="nome" name="nome" class="form-control shadow-none border-dark" id="nome" value="<?php echo $resultado_busca_divulgador['nome']; ?>">
                    </div>
                    <div class="mb-4">
                        <label for="url" class="form-label"><i class="bi bi-share"></i>&nbsp;URL para apontamento</label>
                        <input type="text" name="url" class="form-control shadow-none border-dark" id="url" value="<?php echo $resultado_busca_divulgador['url']; ?>">
                    </div>
                    <hr>
                    <div class="mb-4">
                        <label for="logomarca" class="form-label"><i class="bi bi-image"></i>&nbsp;Logomarca</label>
                        <input type="file" class="form-control shadow-none border-dark" id="logomarca" name="logomarca">
                    </div>
                    <button type="submit" class="btn text-uppercase"><i class="bi bi-send"></i>&nbsp;Editar divulgação</button>
                </form>
            </section>
        </div>
    </div>
</div>
<?php } ?>

<?php if($url_explode[4] == "novo"){ ?>
    <div class="container-fluid mb-5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
        <h6 class="page-start mt-2">
                Cadastrar divulgador
            </h6>
            <section class="promoterEdit mt-4">
                <form class="promoterEdit-form" action="javascript: promoter_create();" enctype="multipart/form-data">
                    <input type="text" name="id" class="d-none" value="#">
                    <div class="mb-3">
                        <label for="nome" class="form-label"><i class="bi bi-pin-angle"></i>&nbsp;Site/Rede Social/Retransmissor</label>
                        <input type="nome" name="nome" class="form-control shadow-none border-dark" id="nome" placeholder="Digite o nome do site/rede social/retransmissor">
                    </div>
                    <div class="mb-4">
                        <label for="url" class="form-label"><i class="bi bi-share"></i>&nbsp;URL para apontamento</label>
                        <input type="text" name="url" class="form-control shadow-none border-dark" id="url" placeholder="Digite a url do site que agrega informações do Canal Start">
                    </div>
                    <hr>
                    <div class="mb-4">
                        <label for="logomarca" class="form-label"><i class="bi bi-image"></i>&nbsp;Logomarca</label>
                        <input type="file" class="form-control shadow-none border-dark" id="logomarca" name="logomarca">
                    </div>
                    <button type="submit" class="btn text-uppercase"><i class="bi bi-send"></i>&nbsp;Cadastrar divulgador</button>
                </form>
            </section>
        </div>
    </div>
</div>
<?php } ?>

<?php if($url_explode[4] == "lista"){  
      $busca_posts = "SELECT * FROM divulgacao ORDER BY id DESC";
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
                Todos os divulgadores
            </h6>
            <button onclick="window.location.href='/canal_start/painel/divulgacao/novo';"type="button" class="btn btn-danger mt-3"><i class="bi bi-plus"></i></button>
            <hr>
            <section class="promoterList d-flex gap-3 flex-wrap mt-4 mb-4">
            <?php while($exibe_divulgacao = $limite_query->fetch()){?>
                <div class="pt-3 pb-3">
                    <div class="d-flex justify-content-center"><img src="<?php echo $exibe_divulgacao['logo']; ?>"></div>
                    <h5 class="text-center mt-3 m-0"><?php echo $exibe_divulgacao['nome']; ?></h5>
                    <h6 class="text-center mt-2 mb-4 m-0">Divulgador</h6>
                    <button onclick="window.location.href='/canal_start/painel/divulgacao/editar/<?php echo $exibe_divulgacao['id']; ?>';" class="btn shadow-none border-0 p-0 float-end"><i class="bi bi-pen-fill"></i></button>
                    <button onclick="window.location.href='/canal_start/admin/validation/divulgacao.php?model=delete&id=<?php echo $exibe_divulgacao['id']; ?>';" class="btn shadow-none border-0 p-0 float-end"><i class="bi bi-trash-fill"></i></button>
                </div>
            <?php } ?>
            </section>
            <nav class="mt-3">
                <ul class="pagination">
                    <?php if($pagina > 1){ ?><li class="page-item"><a class="page-link shadow-none" href="/canal_start/painel/divulgacao/lista/<?php echo $voltar_pagina; ?>">Página anterior</a></li><?php } ?>
                    <li class="page-item"><a class="page-link shadow-none" href="/canal_start/painel/divulgacao/lista/<?php echo $proxima_pagina; ?>">Próxima Página</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<?php } ?>