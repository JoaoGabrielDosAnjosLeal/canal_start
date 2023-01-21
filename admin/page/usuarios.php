<?php 
if($logged <> $exibe_busca_user['email']){ 
    session_destroy();
?>
<script defer>
    alert('Você alterou seu e-mail de login, será necessário relogar para validar a atualização do seu e-mail');
    window.location.href = "/canal_start/painel";
</script>
<?php 
} 
?>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <h6 class="page-start mt-2">
                Edite seu perfil <?php echo $exibe_busca_user['apelido'];?>
            </h6>
            <section class="profileEdit mt-4">
                <form class="profileEdit-form" action="javascript: profile_edit();" enctype="multipart/form-data">
                    <input type="text" name="id" class="d-none" value="<?php echo $exibe_busca_user['id'];?>">
                    <div class="mb-3">
                        <label for="email" class="form-label"><i class="bi bi-envelope"></i>&nbsp;E-mail</label>
                        <input type="email" name="email" class="form-control shadow-none border-dark" id="email" value="<?php echo $exibe_busca_user['email'];?>">
                    </div>
                    <div class="mb-4">
                        <label for="senha" class="form-label"><i class="bi bi-key"></i>&nbsp;Senha</label>
                        <input type="password" name="senha" class="form-control shadow-none border-dark" id="senha" value="<?php echo $exibe_busca_user['senha'];?>">
                    </div>
                    <hr>
                    <div class="mb-4">
                        <label for="nome" class="form-label"><i class="bi bi-person"></i>&nbsp;Nome</label>
                        <input type="text" name="nome" class="form-control shadow-none border-dark" id="nome" value="<?php echo $exibe_busca_user['nome'];?>">
                    </div>
                    <div class="mb-4">
                        <label for="apelido" class="form-label"><i class="bi bi-hash"></i>&nbsp;Apelido</label>
                        <input type="text" name="apelido" class="form-control shadow-none border-dark" id="apeldio" value="<?php echo $exibe_busca_user['apelido'];?>">
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
