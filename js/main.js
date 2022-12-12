$(document).ready(function(){

    const cabecera = $('.cabecera');

        $(window).scroll(function(){
            const inicioScroll = $(this).scrollTop();

            if(inicioScroll > 100) {
                cabecera.addClass('cabecera__reducir');
            } else{
                cabecera.removeClass('cabecera__reducir');
            }

        });


    $('.expo__leer-mas').click(function() {
        $('.expo__bruce-text').toggle();
    });

});