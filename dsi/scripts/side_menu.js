(function ($) {

  Drupal.behaviors.callSideMenu = {
    attach: function (context, settings) {      
        
         /* =============================================================================
         *   Side Menu
         * ========================================================================== */
        $('#header').once('side-menu-setup', function(){
            
            $('#branding').after('<div id="burger-wrap"><div class="burger"><img src="' + Drupal.settings.pathToTheme + '/css/images/burger-ico.png" alt="Main Menu" /> Menu</div></div>');
                        
            $('.burger', context).click(function(){
                $('#side-menu-wrapper').addClass('open');
            });
            
            $('#side-menu-wrapper .region-side-menu .region-inner', context).prepend('<div id="side-menu-close"><span class="side-menu-close-button">Close</span></div>');
            
            $('.side-menu-close-button', context).click(function () {
                    $('#side-menu-wrapper').removeClass('open');
            });
            
            $( window ).resize(function () {
                   $('#side-menu-wrapper').removeClass('open');
            });
            /*
            $('#side-menu-wrapper .block-content > .menu > li').each(function(){
                if($(this).children('.menu').length != 0){
                    $(this).children('a').before('<div class="side-menu-opener"></div>');
                    $(this).children('.menu').hide();
                }
            });
            $('#side-menu-wrapper .block-content > .menu > li .side-menu-opener').click(function(){
                   $(this).siblings('.menu').toggle();
                   $(this).toggleClass('open');
            });
            */
        
        });
    } // end of attach function
  };
})(jQuery);