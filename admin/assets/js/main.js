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
            if(validacao == "login efetuado"){
                window.location.href = 'painel/dashboard';
            }
            if(validacao == "login não encontrado"){
                alert('Seu login não existe em nosso sistema! Caso tenha esquecido seu login entre em contato com o administrador o mais rápido possível.');
            }
        }
    });
}

//****** SIDEBAR *******
$('.sidenav-toggle, .sidenav-close').click(function(){
    $(".sidenav").animate({width:'toggle'}, 500);
});
