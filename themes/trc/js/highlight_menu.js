(function ($) {

  var pathname = window.location.pathname;
  var splitPath = pathname.split('/');
  //$('menu-mobile-top-nav')
  splitPath.forEach(function (element) {
    if (element.toUpperCase().replace(/\s/g, '').replace(/-/g, '') == 'HOWWEDOIT' && splitPath.includes('global-goals') == false && splitPath.includes('our-impact') == false && splitPath.includes('transparency') == false) {

      $('.mobile-top-nav li:nth-child(1)').children().css("font-weight", "900");
    }
  });

  $('.mobile-top-nav li').each(function () {
    splitPath.forEach(function (element) {
      if ($(this).children().text().toUpperCase().replace(/\s/g, '').replace(/-/g, '').includes(element.toUpperCase().replace(/\s/g, '').replace(/-/g, '')) &&
        element != '') {
        $(this).css("font-weight", "900");
      }
    }, this);

  });

})(jQuery);