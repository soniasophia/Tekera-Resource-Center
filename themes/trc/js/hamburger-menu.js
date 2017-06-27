(function($){
  $( '.hamburger' ).on('click', function(e){
    e.preventDefault();
    $('.hamburger-menu').animate({left:'0px'});
	});

  $(document).on('click', function(e) {
    if(! $('.hamburger').is(e.target) ) {
      $('.hamburger-menu').animate({left:'-100vw'});
    }
  });
})(jQuery);