jQuery(document).ready(function( $ ) {
  $(".menu-link").click(function(){
    $("#menu").toggleClass("hide" , "show");
  });
});

/* This is another way to load jQuery in a safe manner
(function( $ ) {
    "use strict";
 
    $(function() {
 
        $('body').addClass('js');
  
          var $menu = $('#menu'),
            $menulink = $('.menu-link'),
            $wrap = $('.nav-flyout');
          
          $menulink.click(function() {
            $menulink.toggleClass('active');
            $wrap.toggleClass('active');
            return false;
          });
          
        });
 
}(jQuery));
*/