(function ($) {
    $('.green-line').children('li').first().children('a').addClass('active')
        .next().addClass('is-open').show();
        
    $('#tab-nav').on('click', 'li > a', function(event) {
      event.preventDefault();
        
      if(!$(this).hasClass('active')) {

        $('#tab-nav .is-open').removeClass('is-open').hide();
        $(this).next().toggleClass('is-open').toggle();
        $('#tab-nav').find('.active').removeClass('active');
        $(this).addClass('active');

      } else {
        $('#tab-nav .is-open').removeClass('is-open').hide();
        $(this).removeClass('active');
      }
   });
})(jQuery);


// (function ($){
// if($('#mobile-dropdown-menu').length) {
//   $('#mobile-dropdown-menu').click(function (event) {
//     event.preventDefault();
//     $('.mobile-dropdown').toggle();
//   });
// }
// })(jQuery);


// (function ($) {
//   $('.option-1').on('click', function(event) {
//     event.preventDefault();
//     var menu = $(this).attr('id');
//     console.log(menu);
//     var menuClass = '.mobile-dropdown .content .' + menu;
//   $('.mobile-dropdown .content').hide();
//   $(menuClass).show();
//   console.log(menuClass);
// });
// })(jQuery);