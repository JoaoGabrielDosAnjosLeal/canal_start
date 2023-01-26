
<?php if($url_explode[4] == "editar"){ 
    $id = $url_explode[5];
    $busca_user_edit = $conn->prepare("SELECT * FROM usuarios WHERE id=:userId");
    $busca_user_edit->bindParam(":userId", $id);
    $busca_user_edit->execute();
    $resultado_busca_user_edit = $busca_user_edit->fetch();        
?>
    <div class="container-fluid mb-5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <h6 class="page-start mt-2">
                Editar perfil de <?php echo $resultado_busca_user_edit['apelido'];?>
            </h6>
            <section class="profileEdit mt-4">
                <form class="profileEdit-form" action="javascript: profile_edit();" enctype="multipart/form-data">
                    <input type="text" name="id" class="d-none" value="<?php echo $resultado_busca_user_edit['id'];?>">
                    <div class="mb-3">
                        <label for="email" class="form-label"><i class="bi bi-envelope"></i>&nbsp;E-mail</label>
                        <input type="email" name="email" class="form-control shadow-none border-dark" id="email" value="<?php echo $resultado_busca_user_edit['email'];?>">
                    </div>
                    <div class="mb-4">
                        <label for="senha" class="form-label"><i class="bi bi-key"></i>&nbsp;Senha</label>
                        <input type="password" name="senha" class="form-control shadow-none border-dark" id="senha" value="<?php echo $resultado_busca_user_edit['senha'];?>">
                    </div>
                    <hr>
                    <div class="mb-4">
                        <label for="nome" class="form-label"><i class="bi bi-person"></i>&nbsp;Nome</label>
                        <input type="text" name="nome" class="form-control shadow-none border-dark" id="nome" value="<?php echo $resultado_busca_user_edit['nome'];?>">
                    </div>
                    <div class="mb-4">
                        <label for="apelido" class="form-label"><i class="bi bi-hash"></i>&nbsp;Apelido</label>
                        <input type="text" name="apelido" class="form-control shadow-none border-dark" id="apeldio" value="<?php echo $resultado_busca_user_edit['apelido'];?>">
                    </div>
                    <hr>
                    <div class="mb-4">
                        <label for="avatar" class="form-label"><i class="bi bi-image"></i>&nbsp;Avatar</label>
                        <input type="file" class="form-control shadow-none border-dark" id="avatar" name="avatar">
                    </div>
                    <button type="submit" class="btn text-uppercase"><i class="bi bi-send"></i>&nbsp;Editar perfil</button>
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
                Cadastrar novo usuário
            </h6>
            <section class="profileEdit mt-4">
                <form class="profileEdit-form" action="javascript: profile_create();" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="email" class="form-label"><i class="bi bi-envelope"></i>&nbsp;E-mail</label>
                        <input type="email" name="email" class="form-control shadow-none border-dark" id="email" placeholder="Digite o e-mail de login do novo usuário" required>
                    </div>
                    <div class="mb-4">
                        <label for="senha" class="form-label"><i class="bi bi-key"></i>&nbsp;Senha</label>
                        <input type="password" name="senha" class="form-control shadow-none border-dark" id="senha" placeholder="Digite a senha de login do novo usuário" required>
                    </div>
                    <hr>
                    <div class="mb-4">
                        <label for="nome" class="form-label"><i class="bi bi-person"></i>&nbsp;Nome</label>
                        <input type="text" name="nome" class="form-control shadow-none border-dark" id="nome" placeholder="Digite o nome do novo usuário">
                    </div>
                    <div class="mb-4">
                        <label for="apelido" class="form-label"><i class="bi bi-hash"></i>&nbsp;Apelido</label>
                        <input type="text" name="apelido" class="form-control shadow-none border-dark" id="apeldio" placeholder="Digite um apelido para o novo usuário">
                    </div>
                    <hr>
                    <div class="mb-4">
                        <label for="avatar" class="form-label"><i class="bi bi-image"></i>&nbsp;Avatar</label>
                        <input type="file" class="form-control shadow-none border-dark" id="avatar" name="avatar" required>
                    </div>
                    <button type="submit" class="btn text-uppercase"><i class="bi bi-send"></i>&nbsp;Cadastrar usuário</button>
                </form>
            </section>
        </div>
    </div>
</div>
<?php } ?>

<?php if($url_explode[4] == "lista"){ 
    $busca_posts = "SELECT * FROM usuarios ORDER BY id DESC";
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
                Todos os usuários
            </h6>
            <button onclick="window.location.href='/canal_start/painel/usuarios/novo';"type="button" class="btn btn-danger mt-3"><i class="bi bi-person-plus-fill"></i></button>
            <hr>
            <section class="userList d-flex gap-3 flex-wrap mt-4 mb-4">
            <?php while($exibe_lista_user = $limite_query->fetch()){?>
                <div class="pt-3 pb-3">
                    <div class="d-flex justify-content-center"><img class="rounded-circle" src="<?php echo $exibe_lista_user['avatar']; ?>"></div>
                    <h5 class="text-center mt-3 m-0"><?php echo $exibe_lista_user['apelido']; ?></h5>
                    <h6 class="text-center mb-4 m-0"><?php echo $exibe_lista_user['nome']; ?></h6>
                    <button onclick="window.location.href='/canal_start/painel/usuarios/editar/<?php echo $exibe_lista_user['id']; ?>'; " class="btn shadow-none border-0 p-0 float-end"><i class="bi bi-pen-fill"></i></button>
                    <button onclick="window.location.href='/canal_start/admin/validation/usuarios.php?model=delete&id=<?php echo $exibe_lista_user['id']; ?>';" class="btn shadow-none border-0 p-0 float-end"><i class="bi bi-trash-fill"></i></button>
                </div>
            <?php } ?>
            </section>
            <nav class="mt-3">
                <ul class="pagination">
                    <?php if($pagina > 1){ ?><li class="page-item"><a class="page-link shadow-none" href="/canal_start/painel/usuarios/lista/<?php echo $voltar_pagina; ?>">Página anterior</a></li><?php } ?>
                    <li class="page-item"><a class="page-link shadow-none" href="/canal_start/painel/usuarios/lista/<?php echo $proxima_pagina; ?>">Próxima Página</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<?php } ?>