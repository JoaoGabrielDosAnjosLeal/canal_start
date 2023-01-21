<?php if($url_explode[4] == "novo"){?>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <h6 class="page-start mt-2">
                Cadastrar novo original
            </h6>
            <section class="originalEdit mt-4 mb-4">
                <form class="originalEdit-form" action="javascript: programa_cadastra();" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nome" class="form-label"><i class="bi bi-chat-right-dots"></i>&nbsp;Nome do original</label>
                        <input type="text" name="nome" class="form-control shadow-none border-dark" id="nome" placeholder="Digite o título do original" required>
                    </div>
                    <div class="mb-3">
                        <label for="tag" class="form-label"><i class="bi bi-hash"></i>&nbsp;Tag do original</label>
                        <input type="text" name="tag" class="form-control shadow-none border-dark" id="tag" placeholder="Digite a tag do original" required>
                    </div>
                    <div class="mb-4">
                        <label for="url" class="form-label"><i class="bi bi-share"></i>&nbsp;URL do vídeo</label>
                        <input type="text" class="form-control shadow-none border-dark" id="url" name="url" placeholder="Digite o URL do iframe Rumble" required>
                    </div>
                    <button type="submit" class="btn text-uppercase"><i class="bi bi-send"></i>&nbsp;Cadastrar</button>
                </form>
            </section>
        </div>
    </div>
</div>
<?php } ?>

<?php if($url_explode[4] == "editar"){?>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <h6 class="page-start mt-2">
                Editar original
            </h6>
            <section class="originalEdit mt-4 mb-4">
                <form class="originalEdit-form" action="javascript: programa_cadastra();" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nome" class="form-label"><i class="bi bi-chat-right-dots"></i>&nbsp;Nome do original</label>
                        <input type="text" name="nome" class="form-control shadow-none border-dark" id="nome" placeholder="Digite o título do original" required>
                    </div>
                    <div class="mb-3">
                        <label for="tag" class="form-label"><i class="bi bi-hash"></i>&nbsp;Tag do original</label>
                        <input type="text" name="tag" class="form-control shadow-none border-dark" id="tag" placeholder="Digite a tag do original" required>
                    </div>
                    <div class="mb-4">
                        <label for="url" class="form-label"><i class="bi bi-share"></i>&nbsp;URL do vídeo</label>
                        <input type="text" class="form-control shadow-none border-dark" id="url" name="url" placeholder="Digite o URL do iframe Rumble" required>
                    </div>
                    <button type="submit" class="btn text-uppercase"><i class="bi bi-send"></i>&nbsp;Editar</button>
                </form>
            </section>
        </div>
    </div>
</div>
<?php } ?>

<?php if($url_explode[4] == "lista"){?>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <h6 class="page-start mt-2">
                Todos os originais
            </h6>
            <section class="originalList d-flex gap-3 flex-wrap mt-4 mb-4">
                <div class="pb-3">
                    <iframe class="rumble" src="https://rumble.com/embed/vxjqao/?pub=4" frameborder="0" allowfullscreen></iframe>
                    <h5 class="text-center mt-3 m-0">Um vídeo aleatório do monark</h5>
                    <h6 class="text-center mt-2 mb-4 m-0">Tag</h6>
                    <button onclick="window.location.href='/canal_start/painel/originais/editar/#'; " class="btn shadow-none border-0 p-0 float-end"><i class="bi bi-pen-fill"></i></button>
                    <button onclick="window.location.href='/canal_start/admin/validation/originais.php?model=delete&id=#';" class="btn shadow-none border-0 p-0 float-end"><i class="bi bi-trash-fill"></i></button>
                </div>
                <div class="pb-3">
                    <iframe class="rumble" src="https://rumble.com/embed/vxjqao/?pub=4" frameborder="0" allowfullscreen></iframe>
                    <h5 class="text-center mt-3 m-0">Um vídeo aleatório do monark</h5>
                    <h6 class="text-center mt-2 mb-4 m-0">Tag</h6>
                    <button onclick="window.location.href='/canal_start/painel/originais/editar/#'; " class="btn shadow-none border-0 p-0 float-end"><i class="bi bi-pen-fill"></i></button>
                    <button onclick="window.location.href='/canal_start/admin/validation/originais.php?model=delete&id=#';" class="btn shadow-none border-0 p-0 float-end"><i class="bi bi-trash-fill"></i></button>
                </div>
                <div class="pb-3">
                    <iframe class="rumble" src="https://rumble.com/embed/vxjqao/?pub=4" frameborder="0" allowfullscreen></iframe>
                    <h5 class="text-center mt-3 m-0">Um vídeo aleatório do monark</h5>
                    <h6 class="text-center mt-2 mb-4 m-0">Tag</h6>
                    <button onclick="window.location.href='/canal_start/painel/originais/editar/#'; " class="btn shadow-none border-0 p-0 float-end"><i class="bi bi-pen-fill"></i></button>
                    <button onclick="window.location.href='/canal_start/admin/validation/originais.php?model=delete&id=#';" class="btn shadow-none border-0 p-0 float-end"><i class="bi bi-trash-fill"></i></button>
                </div>
                <div class="pb-3">
                    <iframe class="rumble" src="https://rumble.com/embed/vxjqao/?pub=4" frameborder="0" allowfullscreen></iframe>
                    <h5 class="text-center mt-3 m-0">Um vídeo aleatório do monark</h5>
                    <h6 class="text-center mt-2 mb-4 m-0">Tag</h6>
                    <button onclick="window.location.href='/canal_start/painel/originais/editar/#'; " class="btn shadow-none border-0 p-0 float-end"><i class="bi bi-pen-fill"></i></button>
                    <button onclick="window.location.href='/canal_start/admin/validation/originais.php?model=delete&id=#';" class="btn shadow-none border-0 p-0 float-end"><i class="bi bi-trash-fill"></i></button>
                </div>
                <div class="pb-3">
                    <iframe class="rumble" src="https://rumble.com/embed/vxjqao/?pub=4" frameborder="0" allowfullscreen></iframe>
                    <h5 class="text-center mt-3 m-0">Um vídeo aleatório do monark</h5>
                    <h6 class="text-center mt-2 mb-4 m-0">Tag</h6>
                    <button onclick="window.location.href='/canal_start/painel/originais/editar/#'; " class="btn shadow-none border-0 p-0 float-end"><i class="bi bi-pen-fill"></i></button>
                    <button onclick="window.location.href='/canal_start/admin/validation/originais.php?model=delete&id=#';" class="btn shadow-none border-0 p-0 float-end"><i class="bi bi-trash-fill"></i></button>
                </div>
                <div class="pb-3">
                    <iframe class="rumble" src="https://rumble.com/embed/vxjqao/?pub=4" frameborder="0" allowfullscreen></iframe>
                    <h5 class="text-center mt-3 m-0">Um vídeo aleatório do monark</h5>
                    <h6 class="text-center mt-2 mb-4 m-0">Tag</h6>
                    <button onclick="window.location.href='/canal_start/painel/originais/editar/#'; " class="btn shadow-none border-0 p-0 float-end"><i class="bi bi-pen-fill"></i></button>
                    <button onclick="window.location.href='/canal_start/admin/validation/originais.php?model=delete&id=#';" class="btn shadow-none border-0 p-0 float-end"><i class="bi bi-trash-fill"></i></button>
                </div>
            </section>
            <nav class="mt-3">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link shadow-none" href="/canal_start/painel/originais/lista/#">Página anterior</a></li>
                    <li class="page-item"><a class="page-link shadow-none" href="/canal_start/painel/originais/lista/#">Próxima Página</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<?php } ?>