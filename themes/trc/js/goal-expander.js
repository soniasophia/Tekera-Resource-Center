jQuery(document).ready(function ($){
  var clickId = '';
  var selector = '.goal-thumbnail';
  var closer = '.close-button';
  
  $(selector).click(function (event){
    event.preventDefault();
    var click = $(this).data('target');
    clickId = '#' + click;
    $(selector).hide('slow');    
    $(clickId).show('slow');
  });

  $(closer).click(function (event){
    event.preventDefault();
    $(clickId).hide('slow');
    $(selector).show('slow');
  });
});