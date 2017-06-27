(function ($){
if($('#projects-toggle-menu').length) {
  $('#projects-toggle-menu').click(function () {
    $('.custom-sub-menu-wrapper').toggle();
  });
}

$(window).resize(function() {
  if($(document).width()>650){
    $('.custom-sub-menu-wrapper').show();
    }
});


$(window).resize(function() {
  if($(document).width()<650){
    $('.custom-sub-menu-wrapper').hide();
    }
});
})(jQuery);