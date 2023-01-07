//******ROTAS******
function router(){
    var url = window.location.href;
    var urlSplit = url.split("/");
    var urlPoint = urlSplit[4] //Marcador da página
    var urlSubPoint01 = urlSplit[5]; //Parametro único

    console.log(urlPoint);
    
    switch(urlPoint){
        case '': case undefined:
            $('.main').load('http://localhost/canal_start/site/page/home.php');
        break;
        case 'programacao':
            $('.main').load('http://localhost/canal_start/site/page/programacao.php');
        break;
        case 'originais':
            $('.main').load(`http://localhost/canal_start/site/page/originais.php/${urlSubPoint01}`);
        break;
        case 'speednews':
            $('.main').load(`http://localhost/canal_start/site/page/speednews.php/${urlSubPoint01}`);
        break;
    }

    window.addEventListener('popstate', (e)=>{
        console.log(e.state);
        switch(e.state){
            case null: case 'home':
                $('.main').load('http://localhost/canal_start/site/page/home.php');
            break;
            case 'programacao':
                $('.main').load(`http://localhost/canal_start/site/page/programacao.php/${urlSubPoint01}`);
            break;
            case 'speednews':
                $('.main').load(`http://localhost/canal_start/site/page/speednews.php/${urlSubPoint01}`);
            break;
        }
    });
}

router();

//******TEMA DARKMODE E LIGHT MODE******

if(Cookies.get('theme') == 'dark'){
    //Tema escuro
    $('.btn-theme').html('<i class="bi bi-brightness-low-fill"></i>');
}else{
    //Tema claro
    $('.btn-theme').html('<i class="bi bi-moon-stars-fill"></i>');
}

$('.btn-theme').click(function(){
    if(Cookies.get('theme') == 'dark'){
        //Vai pro tema claro
        Cookies.remove('theme');
        $('.btn-theme').html('<i class="bi bi-moon-stars-fill"></i>');
        themeIndex();
        router();
    }else{
        //Vai pro tema escuro
        Cookies.set('theme', 'dark', {expires: 1366});
        $('.btn-theme').html('<i class="bi bi-brightness-low-fill"></i>');
        themeIndex();
        router();
    }
});

//Configuração do tema somente para objetos da index
function themeIndex(){    
    switch(Cookies.get('theme')){
        case 'dark':
            $('.navbar').css({"background-image": "url('/canal_start/site/assets/img/bg-nav.black.webp')"});
            $('.nav-logoPC').css({"background-image": "url('/canal_start/site/assets/img/bg-nav.center.black.webp')"});
            $('.nav-item > a').css({"color": "#ffffff"});
            $('.navbar-brand > img').attr("src", "/canal_start/site/assets/img/logo.white.webp");
            $('.nav-logoPC > a > img').attr("src", "/canal_start/site/assets/img/logo.white.webp");
            $('.navbar-toggler').css({"background-color": "#ffffff"});
    
            $('.player').css({"background-color": "#251e21"});
            $('.btn-theme').css({"background-color": "#251e21"}).css({"border": "0.2rem solid #393939"}).css({"color": "#ffffff"});

            $('footer').css({"background-color": "#251e21"});
        break;
        default:
            $('.navbar').css({"background-image": ""});
            $('.nav-logoPC').css({"background-image": ""});
            $('.nav-item > a').css({"color": ""});
            $('.navbar-brand > img').attr("src", "/canal_start/site/assets/img/logo.webp");
            $('.nav-logoPC > a > img').attr("src", "/canal_start/site/assets/img/logo.webp");
            $('.navbar-toggler').css({"background-color": ""});
    
            $('.player').css({"background-color": ""});
            $('.btn-theme').css({"background-color": ""}).css({"border": ""}).css({"color": ""});

            $('footer').css({"background-color": ""});
        break;
    }
}

themeIndex();
