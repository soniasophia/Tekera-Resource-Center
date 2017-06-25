// $(".menu-nav-bar-container a").click(function() {        
//           $(".menu-nav-bar-container a").removeClass("active"); 
//           $(this).addClass("active");          
// });

// $(".menu-nav-bar-container a").on("click", function() {
//   $(".menu-nav-bar-container a").css("box-sizing", $(this).text());
// });

(function($) {
  $('.menu-nav-bar-container a').click(function() {
    $(this).addClass("active"); 
    $(".menu-nav-bar-container a").removeClass("active");
 });
})(jQuery);