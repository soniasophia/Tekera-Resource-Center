  var WORD_API;

(function($) {
  $(".members-button").on('click', function(event){
    var buttonValue = $( this ).val();
    event.preventDefault();
    //console.log(buttonValue);
    console.log(WORD_API.api_url);
    console.log(WORD_API.api_url + 'wp/v2/members/' + buttonValue);
    $.ajax({
      method: 'GET',
      url: WORD_API.api_url + 'wp/v2/members/' + buttonValue,
      success: function(posts) {
        console.log(posts);
      },
      error: function(error){
        console.log(error);
      }
    })
  });

})(jQuery);