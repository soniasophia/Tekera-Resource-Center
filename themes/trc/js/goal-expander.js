jQuery(document).ready(function ($){
  var clickId = '';
  var selector = '.goal-thumbnail';
  var closer = '.close-button';
  
  $(selector).click(function (event){
    event.preventDefault();
    var click = $(this).data('target');
    clickId = '#' + click;
    console.log(clickId);
    $(selector).hide();    
    $(clickId).show();
  });

  $(closer).click(function (event){
    event.preventDefault();
    console.log('progress..');
    $(clickId).hide();
    $(selector).show();
  });
});