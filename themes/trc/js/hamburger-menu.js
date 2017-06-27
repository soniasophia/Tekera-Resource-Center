(function($){
  $( '.hamburger' ).on('click', function(e){
    e.preventDefault();
    $('.hamburger-menu').animate({left:'0px'});
	});

  // $( '.hamburger' ).blur('click', function(){
  //    $('.hamburger-menu').animate({left:'-100vw'});
  //   //  $( '.hamburger-menu').fadeOut( "fast");
	// });
// })(jQuery);

  $(document).on('click', function(e) {
    if(! $('.hamburger').is(e.target) ) {
      $('.hamburger-menu').animate({left:'-100vw'});
    }
  });
})(jQuery);