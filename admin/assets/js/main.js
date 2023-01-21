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
            url: '/canal_start/admin/validation/profile.php?avatar=no',
            data: {
                'id': profileEdit_id,
                'email': profileEdit_email, 
                'senha': profileEdit_senha,
                'nome': profileEdit_nome,
                'apelido': profileEdit_apelido
            },
            success: function(validacao){
                if(validacao == "sucesso"){
                    alert("Seu perfil foi atualizado com sucesso!");
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
                url: '/canal_start/admin/validation/profile.php?avatar=yes',
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
                        alert("Seu perfil foi atualizado com sucesso!");
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