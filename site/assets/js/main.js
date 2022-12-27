//******SPEED NEWS******
$('.speedNews-article').children('button').click(function(){
    $(this).parent().children('p, span').fadeToggle();
});