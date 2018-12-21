function animeScroll(){
    var elemento = $(".anime");
    var newElemento = "anime-start";
    var offsset = $(window).height() * 3/4;
    var documentTop = $(document).scrollTop();

    elemento.each(function(){

        var itemTop = $(this).offset().top;

        if (documentTop > itemTop - offsset){
            $(this).addClass(newElemento);
            
        }else{
            $(this).removeClass(newElemento);

        }
    });
}
$(document).scroll(function(){
    animeScroll();
});