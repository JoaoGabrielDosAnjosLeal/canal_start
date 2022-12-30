//******SPEED NEWS******
$('.speedNews-article').children('button').click(function(){
    $(this).parent().children('p, span').fadeToggle();
});

//******ROTAS******
function router(){
    var url = window.location.href;
    var urlSplit = url.split("/");
    var urlPoint = url.split[4];
    
    switch(urlPoint){
        case undefined: case 'home':
            $('main').load('http://localhost/canal_start/site/page/home.php');
        break;
    }
}

router();