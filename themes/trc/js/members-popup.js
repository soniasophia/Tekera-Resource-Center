  var WORD_API;

  jQuery(document).ready(function ($) {

    var results_container = '#single-view-member';

    $(".members-button").on('click', function (event) {
      $(results_container).empty();
      var buttonValue = $(this).val();
      event.preventDefault();

      $.ajax({
        method: 'GET',
        url: WORD_API.api_url + 'wp/v2/members/' + buttonValue,

        success: function (post) {
          var html = '',
            text = '',
            content = '',
            img = '',
            button = '';

          button ='<div class="exit-button"><button class="expanded-button">X</button></div>'
          img = '<div class="expanded-header"><img class="expanded-img" src="' + post.better_featured_image.source_url + '">'
          text = '<div class="expanded-text"><h2>' +
            post.first_name + ' ' + post.last_name + '</h2>' +
            '<h3>' + post.job_title + '</h3></div></div>'

          content = post.summary;
          html += button + img + text + content;

          $(results_container).append(html);

          $(results_container).show('slow', function () {
          });

          $('.articles-members').hide('slow', function () {
          });

          assigned_button();
        },
      })
    });

    function assigned_button() {
    $('.expanded-button').on('click', function (event) {
      event.preventDefault();
      $(results_container).hide('slow', function () {
      });

      $('.articles-members').show('slow', function () {
      }).css('display', 'flex');
    });
  }



  });

  