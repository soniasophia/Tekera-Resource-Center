(function($){

  var pathname = window.location.pathname;
  var splitPath = pathname.split('/');
  //$('menu-mobile-top-nav')
  $('.mobile-top-nav li').each(function(){
    splitPath.forEach(function(element) {
      if(element.toUpperCase().replace(/\s/g,'').replace(/-/g,'') == $(this).children().text().toUpperCase().replace(/\s/g,'').replace(/-/g,'')){
        $(this).css("font-weight", "900");
      }
    }, this);
  });

  })(jQuery);