var WORD_API;

  jQuery(document).ready(function ($) {
          var smallBox = ''; 
          var bigBox = '.blog-main-wrapper';
          var smallBoxSub = '';

    $(".more-blogs-button").click(function (event) {
      event.preventDefault();
// Empty blog post wrapper of existing content      
      $(bigBox).empty();

// Pull post data from REST API
      $.ajax({
        method: 'GET',
        url: WORD_API.api_url + 'wp/v2/posts',
/* On succesfull acquisition of API data, dump object 
   attributes into variables */
        success: function (posts) {
          posts.forEach(function(post) {
          var thumb = post.better_featured_image.source_url;
          var title = post.title.rendered;
          var excerpt = post.excerpt.rendered;
          var link = post.link;
// Add markup elements consistent with styling selectors          
          smallBoxSub = '<div class="blog-title-wrapper"><a class="blog-hover" href="'
                      + link
                      + '">';
          smallBox = '<div class="blog-post-box" style="background-image: url(\''
                   + thumb
                   + '\')">';
          var closeDiv = '</a></div></div>';
          var html = smallBox
                   + smallBoxSub
                   + '<h3>'
                   + title
                   + '</h3>'
                   + excerpt
                   + closeDiv;
// Append markup with API attributes to existing blog wrapper                   
          $(bigBox).append(html); 
          }, this);         
        },
      })     
    });
  });