(function($){
  $( '.hamburger' ).on('click', function(e){
    e.preventDefault();
    if($('.hamburger').hasClass('closed')){
    $('.hamburger-menu').animate({left:'0px'});
    $('.hamburger').removeClass('closed')
  }
  else{
    $('.hamburger-menu').animate({left:'-100vw'});
    $('.hamburger').addClass('closed')

  }
	});

  $(document).on('click', function(e) {
    if(! $('.hamburger').is(e.target) ) {
      $('.hamburger-menu').animate({left:'-100vw'});
    }
  });
})(jQuery);