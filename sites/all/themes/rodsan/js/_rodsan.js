/* Implement custom javascript here */

(function($) {
    Drupal.behaviors.rodsan = {
        attach: function(context, settings){

            // Scroll al hacer click en el enlace de contacto
            if ( $('.l-footer').length !== 0 ) {
                $('.contacto-footer').on('click', { elem: '.l-footer' }, scrollToElem );
            }

            $('.reveal-modal').foundation('reveal', 'open');

            $('.close').click(function(){

                $('.reveal-modal-bg').css('display','none');
                $('.reveal-modal').css('display','none');

            }); 



        }
    }; //-- end Drupal.behaviors

    function scrollToElem (e) {
        e.preventDefault();
        var body = jQuery("html, body"),
            elHeight = $(e.data.elem).offset().top;
        body.animate({ scrollTop:elHeight }, '800', 'swing');
    }

})(jQuery);