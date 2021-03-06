// Tab between CFS content on desktop view
(function ($) {
  $('.green-line').children('li').first().children('a').addClass('active')
    .next().addClass('is-open').show();

  $('#tab-nav').on('click', 'li > a', function (event) {
    event.preventDefault();

    if (!$(this).hasClass('active')) {

      $('#tab-nav .is-open').removeClass('is-open').hide();
      $(this).next().toggleClass('is-open').toggle();
      $('#tab-nav').find('.active').removeClass('active');
      $(this).addClass('active');

    } else {
      $('#tab-nav .is-open').removeClass('is-open').hide();
      $(this).removeClass('active');
    }
  });

  $('.apply-now').on('click', function (e) {
    e.preventDefault();
    $('#tab-nav .is-open').removeClass('is-open').hide();
    $('#tab-nav').find('.active').removeClass('active');
    $('.green-line li:nth-child(3)').first().children('a').addClass('active')
      .next().addClass('is-open').show();
  })


})(jQuery);


// Toggles dropdown for CFS content on mobile view
(function ($) {
  $('.content-dropdown').hide();
  if ($('#mobile-dropdown-arrow').length) {
    var showFirst = function () {
      $('.content').first().show();
    }
    showFirst();

    $('#mobile-dropdown-arrow').click(function (event) {
      event.preventDefault();
      $('.content-dropdown').toggle();
    });

    $('.mobile-content-toggle').on('click', function (event) {
      event.preventDefault();
      var menu = $(this).attr('id');
      var menuClass = '.mobile-dropdown .' + menu;

      $('.mobile-dropdown .content').hide();
      $(menuClass).show();
      $('.content-dropdown').toggle();
    });
  }

  $('.apply-now').on('click', function (e) {
    e.preventDefault();
    var menu = $('.content-dropdown a:nth-child(3)').attr('id');
      var menuClass = '.mobile-dropdown .' + menu;
      $('.mobile-dropdown .content').hide();
      $(menuClass).show();
  })

})(jQuery);