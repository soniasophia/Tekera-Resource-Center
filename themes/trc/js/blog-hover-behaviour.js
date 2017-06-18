
(function hoverChange($){
$('.blog-hover').hover(function(){
  console.log('help me obi wan');
  // $('blog-post-box').toggleClass('blog-hover-overlay');
});
$('.blog-hover').blur(function(){
  console.log('youre my only hope...');
  
});
})(jQuery);