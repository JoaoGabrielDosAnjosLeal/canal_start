//****** LOGIN *******
$('.login-help').click(function(){
    alert('Está perdido? Para obter ajuda de qualquer tipo entre em contato com o administrador ou desenvolvedor o mas rápido possível!');
});

function login_form(){
    const loginForm = document.querySelector('.login-form');
    
    const loginEmail = loginForm.email.value;
    const loginSenha = loginForm.senha.value;

    $.ajax({
        type: 'post',
        url: '/canal_start/admin/validation/login.php',
        data: {
            'email': loginEmail, 
            'senha': loginSenha
        },
        success: function(validacao){
            switch(validacao){
                case "sucesso":
                    window.location.href = "painel/inicio";
                break;
                case "error":
                    alert("Seu login não foi encontrado! Verifique os dados e tente novamente.");
                break;
                default:
                    alert("Ocorreu um erro ao validar o login! Procure o desenvolvedor e verifique o console.");
                    console.log(validacao);
                break;

            }
        }
    });
}

//****** SIDEBAR *******
$('.sidenav-toggle, .sidenav-close').click(function(){
    $(".sidenav").animate({width:'toggle'}, 500);
});

//****** EDITAR PERFIL *******
function profile_edit(){
    const profileEdit = document.querySelector('.profileEdit-form');
    const profileEdit_id = profileEdit.id.value;
    const profileEdit_email = profileEdit.email.value;
    const profileEdit_senha = profileEdit.senha.value;
    const profileEdit_nome = profileEdit.nome.value;
    const profileEdit_apelido = profileEdit.apelido.value;
    const profileEdit_avatar = profileEdit.avatar.files[0];

    if(profileEdit_avatar == undefined){
        $.ajax({
            type: 'post',
            url: '/canal_start/admin/validation/usuarios.php?model=edit&avatar=no',
            data: {
                'id': profileEdit_id,
                'email': profileEdit_email, 
                'senha': profileEdit_senha,
                'nome': profileEdit_nome,
                'apelido': profileEdit_apelido
            },
            success: function(validacao){
                if(validacao == "sucesso"){
                    alert("O perfil foi atualizado com sucesso!");
                    location.reload();
                }else{
                    alert("Ocorreu um erro no processamento dos dados! Procure o desenvolvedor e verifique o console.");
                    console.log(validacao);
                }
            }
        });
    }else{
        const avatarblob = new FileReader();
        avatarblob.readAsDataURL(profileEdit_avatar);
        avatarblob.onload = function(){
            const avatar = avatarblob.result;
            $.ajax({
                type: 'post',
                url: '/canal_start/admin/validation/usuarios.php?model=edit&avatar=yes',
                data: {
                    'id': profileEdit_id,
                    'email': profileEdit_email, 
                    'senha': profileEdit_senha,
                    'nome': profileEdit_nome,
                    'apelido': profileEdit_apelido,
                    'avatar': avatar
                },
                success: function(validacao){
                    if(validacao == "sucesso"){
                        alert("O perfil foi atualizado com sucesso!");
                        location.reload();
                    }
                    else{
                        alert("Ocorreu um erro no processamento dos dados! Procure o desenvolvedor e verifique o console.");
                        console.log(validacao);
                    }
                }
            });
        }
    }
}

function profile_create(){
    const profileCreate = document.querySelector('.profileEdit-form');
    const profileCreate_email = profileCreate.email.value;
    const profileCreate_senha = profileCreate.senha.value;
    const profileCreate_nome = profileCreate.nome.value;
    const profileCreate_apelido = profileCreate.apelido.value;
    const profileCreate_avatar = profileCreate.avatar.files[0];

    const avatarblob = new FileReader();
    avatarblob.readAsDataURL(profileCreate_avatar);
    avatarblob.onload = function(){
        const avatar = avatarblob.result;
        $.ajax({
            type: 'post',
            url: '/canal_start/admin/validation/usuarios.php?model=create',
            data: {
                'email': profileCreate_email, 
                'senha': profileCreate_senha,
                'nome': profileCreate_nome,
                'apelido': profileCreate_apelido,
                'avatar': avatar
            },
            success: function(validacao){
                if(validacao == "sucesso"){
                    alert("O perfil foi criado com sucesso!");
                    location.reload();
                }
                else{
                    alert("Ocorreu um erro no processamento dos dados! Procure o desenvolvedor e verifique o console.");
                    console.log(validacao);
                }
            }
        });
    }
}

//****** SPEED NEWS *******
function speedNews_create(){
    const speedNewsForm = document.querySelector('.speedNewsEdit-form');
    const speedNews_titulo = speedNewsForm.titulo.value;
    const speedNews_hashtag = speedNewsForm.hashtag.value;
    const speedNews_conteudo = speedNewsForm.conteudo.value;
    const speedNews_thumb = speedNewsForm.thumb.files[0];

   const thumbblob = new FileReader();
   thumbblob.readAsDataURL(speedNews_thumb);
   thumbblob.onload = function(){
        const thumb = thumbblob.result;
        $.ajax({
            type: 'post',
            url: '/canal_start/admin/validation/speednews.php?model=create',
            data: {
                'titulo': speedNews_titulo,
                'hashtag': speedNews_hashtag, 
                'conteudo': speedNews_conteudo,
                'thumb': thumb
            },success: function(validacao){
                if(validacao == "sucesso"){
                    alert("Seu speed news foi publicado com sucesso!");
                }else{
                    alert("Ocorreu um erro no processamento dos dados! Procure o desenvolvedor e verifique o console.");
                    console.log(validacao);
                }
            }
        });
   }
}

function speedNews_edit(){
    const speedNewsForm = document.querySelector('.speedNewsEdit-form');
    const speedNews_id = speedNewsForm.id.value;
    const speedNews_titulo = speedNewsForm.titulo.value;
    const speedNews_hashtag = speedNewsForm.hashtag.value;
    const speedNews_conteudo = speedNewsForm.conteudo.value;
    const speedNews_thumb = speedNewsForm.thumb.files[0];

    if(speedNews_thumb == undefined){
        $.ajax({
            type: 'post',
            url: '/canal_start/admin/validation/speednews.php?model=edit&thumb=no',
            data: {
                'id': speedNews_id,
                'titulo': speedNews_titulo,
                'hashtag': speedNews_hashtag, 
                'conteudo': speedNews_conteudo,
            },success: function(validacao){
                if(validacao == "sucesso"){
                    alert("Seu speed news foi editado com sucesso!");
                }else{
                    alert("Ocorreu um erro no processamento dos dados! Procure o desenvolvedor e verifique o console.");
                    console.log(validacao);
                }
            }
        });
    }else{
        const thumbblob = new FileReader();
        thumbblob.readAsDataURL(speedNews_thumb);
        thumbblob.onload = function(){
        const thumb = thumbblob.result;
            $.ajax({
                type: 'post',
                url: '/canal_start/admin/validation/speednews.php?model=edit&thumb=yes',
                data: {
                    'id': speedNews_id,
                    'titulo': speedNews_titulo,
                    'hashtag': speedNews_hashtag, 
                    'conteudo': speedNews_conteudo,
                    'thumb': thumb
                },success: function(validacao){
                    if(validacao == "sucesso"){
                        alert("Seu speed news foi editado com sucesso!");
                    }else{
                        alert("Ocorreu um erro no processamento dos dados! Procure o desenvolvedor e verifique o console.");
                        console.log(validacao);
                    }
                }
            });
        }   
    }
}

//****** PROGRAMAS *******
function programa_cadastra(){
    const programaForm = document.querySelector('.scheduleEdit-form');
    const programaNome = programaForm.nome.value;
    const programaHorario = programaForm.horario.value;
    const programaPeriodo = programaForm.periodo.value;
    const programaDestaque = programaForm.destaque.value;
    const programaThumb = programaForm.thumb.files[0];

    const thumbblob = new FileReader();
    thumbblob.readAsDataURL(programaThumb);
    thumbblob.onload = function(){
    const thumb = thumbblob.result;
        $.ajax({
            type: 'post',
            url: '/canal_start/admin/validation/programacao.php?model=create',
            data: {
                'nome': programaNome,
                'horario': programaHorario, 
                'periodo': programaPeriodo,
                'destaque': programaDestaque,
                'thumb': thumb
            },success: function(validacao){
                if(validacao == "sucesso"){
                    alert("O programa foi criado com sucesso!");
                }else{
                    alert("Ocorreu um erro no processamento dos dados! Procure o desenvolvedor e verifique o console.");
                    console.log(validacao);
                }
            }
        });
    }   
}

function programa_edita(){
    const programaForm = document.querySelector('.scheduleEdit-form');
    const programaId = programaForm.id.value;
    const programaNome = programaForm.nome.value;
    const programaHorario = programaForm.horario.value;
    const programaPeriodo = programaForm.periodo.value;
    const programaDestaque = programaForm.destaque.value;
    const programaThumb = programaForm.thumb.files[0];

    if(programaThumb == undefined){
        $.ajax({
            type: 'post',
            url: '/canal_start/admin/validation/programacao.php?model=edit&thumb=no',
            data: {
                'id': programaId,
                'nome': programaNome,
                'horario': programaHorario, 
                'periodo': programaPeriodo,
                'destaque': programaDestaque
            },success: function(validacao){
                if(validacao == "sucesso"){
                    alert("O programa foi editado com sucesso!");
                }else{
                    alert("Ocorreu um erro no processamento dos dados! Procure o desenvolvedor e verifique o console.");
                    console.log(validacao);
                }
            }
        });
    }else{
        const thumbblob = new FileReader();
        thumbblob.readAsDataURL(programaThumb);
        thumbblob.onload = function(){
        const thumb = thumbblob.result;
            $.ajax({
                type: 'post',
                url: '/canal_start/admin/validation/programacao.php?model=edit&thumb=yes',
                data: {
                    'id': programaId,
                    'nome': programaNome,
                    'horario': programaHorario, 
                    'periodo': programaPeriodo,
                    'destaque': programaDestaque,
                    'thumb': thumb
                },success: function(validacao){
                    if(validacao == "sucesso"){
                        alert("O programa foi editado com sucesso!");
                    }else{
                        alert("Ocorreu um erro no processamento dos dados! Procure o desenvolvedor e verifique o console.");
                        console.log(validacao);
                    }
                }
            });
        }   
    }   
}

//****** ORIGINAIS *******
function original_cadastra(){
    const originalForm = document.querySelector('.originalEdit-form');
    const originalNome = originalForm.nome.value;
    const originalTag = originalForm.tag.value;
    const originalVideo = originalForm.video.value;
    
    $.ajax({
        type: 'post',
        url: '/canal_start/admin/validation/originais.php?model=create',
        data: {
            'nome': originalNome,
            'tag': originalTag, 
            'video': originalVideo        
        },success: function(validacao){
            if(validacao == "sucesso"){
                alert("O original foi criado com sucesso!");
            }else{
                alert("Ocorreu um erro no processamento dos dados! Procure o desenvolvedor e verifique o console.");
                console.log(validacao);
            }
        }
    });
}

function original_editar(){
    const originalForm = document.querySelector('.originalEdit-form');
    const originalId = originalForm.id.value;
    const originalNome = originalForm.nome.value;
    const originalTag = originalForm.tag.value;
    const originalVideo = originalForm.video.value;
    
    $.ajax({
        type: 'post',
        url: '/canal_start/admin/validation/originais.php?model=edit',
        data: {
            'id': originalId,
            'nome': originalNome,
            'tag': originalTag, 
            'video': originalVideo        
        },success: function(validacao){
            if(validacao == "sucesso"){
                alert("O original foi editado com sucesso!");
            }else{
                alert("Ocorreu um erro no processamento dos dados! Procure o desenvolvedor e verifique o console.");
                console.log(validacao);
            }
        }
    });
}

//******APARÊNCIA*******
function appearance_edit(){
    const appearanceForm = document.querySelector('.appearanceEdit-form');
    const appearance_destaque = appearanceForm.destaque.files[0];
    const appearance_originais = appearanceForm.originais.files[0];
    const appearance_divulgacao = appearanceForm.divulgacao.files[0];
    const appearance_sobre = appearanceForm.sobre.files[0];

    if(appearance_destaque != undefined){
        const backgroundblob = new FileReader();
        backgroundblob.readAsDataURL(appearance_destaque);
        backgroundblob.onload = function(){
        const background = backgroundblob.result;
            $.ajax({
                type: 'post',
                url: '/canal_start/admin/validation/aparencia.php?model=destaque',
                data: {
                    'background': background
                },success: function(validacao){
                    if(validacao == "sucesso"){
                        alert("O background foi editado com sucesso!");
                    }else{
                        alert("Ocorreu um erro no processamento dos dados! Procure o desenvolvedor e verifique o console.");
                        console.log(validacao);
                    }
                }
            });
        }   
    }
    if(appearance_originais != undefined){
        const backgroundblob = new FileReader();
        backgroundblob.readAsDataURL(appearance_originais);
        backgroundblob.onload = function(){
        const background = backgroundblob.result;
            $.ajax({
                type: 'post',
                url: '/canal_start/admin/validation/aparencia.php?model=originais',
                data: {
                    'background': background
                },success: function(validacao){
                    if(validacao == "sucesso"){
                        alert("O background foi editado com sucesso!");
                    }else{
                        alert("Ocorreu um erro no processamento dos dados! Procure o desenvolvedor e verifique o console.");
                        console.log(validacao);
                    }
                }
            });
        }   
    }
    if(appearance_divulgacao != undefined){
        const backgroundblob = new FileReader();
        backgroundblob.readAsDataURL(appearance_divulgacao);
        backgroundblob.onload = function(){
        const background = backgroundblob.result;
            $.ajax({
                type: 'post',
                url: '/canal_start/admin/validation/aparencia.php?model=divulgacao',
                data: {
                    'background': background
                },success: function(validacao){
                    if(validacao == "sucesso"){
                        alert("O background foi editado com sucesso!");
                    }else{
                        alert("Ocorreu um erro no processamento dos dados! Procure o desenvolvedor e verifique o console.");
                        console.log(validacao);
                    }
                }
            });
        }   
    }
    if(appearance_sobre != undefined){
        const backgroundblob = new FileReader();
        backgroundblob.readAsDataURL(appearance_sobre);
        backgroundblob.onload = function(){
        const background = backgroundblob.result;
            $.ajax({
                type: 'post',
                url: '/canal_start/admin/validation/aparencia.php?model=sobre',
                data: {
                    'background': background
                },success: function(validacao){
                    if(validacao == "sucesso"){
                        alert("O background foi editado com sucesso!");
                    }else{
                        alert("Ocorreu um erro no processamento dos dados! Procure o desenvolvedor e verifique o console.");
                        console.log(validacao);
                    }
                }
            });
        }   
    }
}

//******DIVULGAÇÃO*******
function promoter_create(){
    const promoterForm = document.querySelector('.promoterEdit-form');
    const promoterForm_nome = promoterForm.nome.value;
    const promoterForm_url = promoterForm.url.value;
    const promoterForm_logo = promoterForm.logomarca.files[0];

    const logoblob = new FileReader();
        logoblob.readAsDataURL(promoterForm_logo);
        logoblob.onload = function(){
        const logo = logoblob.result;
            $.ajax({
                type: 'post',
                url: '/canal_start/admin/validation/divulgacao.php?model=create',
                data: {
                    'nome': promoterForm_nome,
                    'url': promoterForm_url,
                    'logo': logo
                },success: function(validacao){
                    if(validacao == "sucesso"){
                        alert("O divulgador foi criado com sucesso!");
                    }else{
                        alert("Ocorreu um erro no processamento dos dados! Procure o desenvolvedor e verifique o console.");
                        console.log(validacao);
                    }
                }
            });
        }   
}

function promoter_edit(){
    const promoterForm = document.querySelector('.promoterEdit-form');
    const promoterForm_id = promoterForm.id.value;
    const promoterForm_nome = promoterForm.nome.value;
    const promoterForm_url = promoterForm.url.value;
    const promoterForm_logo = promoterForm.logomarca.files[0];

    if(promoterForm_logo == undefined){
        $.ajax({
            type: 'post',
            url: '/canal_start/admin/validation/divulgacao.php?model=edit&logo=no',
            data: {
                'id': promoterForm_id,
                'nome': promoterForm_nome,
                'url': promoterForm_url,
            },success: function(validacao){
                if(validacao == "sucesso"){
                    alert("O divulgador foi editado com sucesso!");
                }else{
                    alert("Ocorreu um erro no processamento dos dados! Procure o desenvolvedor e verifique o console.");
                    console.log(validacao);
                }
            }
        });

    }else{
        const logoblob = new FileReader();
        logoblob.readAsDataURL(promoterForm_logo);
        logoblob.onload = function(){
        const logo = logoblob.result;
            $.ajax({
                type: 'post',
                url: '/canal_start/admin/validation/divulgacao.php?model=edit&logo=yes',
                data: {
                    'id': promoterForm_id,
                    'nome': promoterForm_nome,
                    'url': promoterForm_url,
                    'logo': logo
                },success: function(validacao){
                    if(validacao == "sucesso"){
                        alert("O divulgador foi editado com sucesso!");
                    }else{
                        alert("Ocorreu um erro no processamento dos dados! Procure o desenvolvedor e verifique o console.");
                        console.log(validacao);
                    }
                }
            });
        }   
    }
}