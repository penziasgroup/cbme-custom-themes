// JQuery
(function ($) {
 $(document).ready(function(menu) {
  // alert("woot");
  // Show/Hide Brown Menu
  $("a#brown-menu-button").bind("click keypress", function(){		
    $("#brown-nav").toggleClass("show");
	  return false;
   });
 });
})(jQuery);;