jQuery(document).ready(function ($){
  var clickId = '';
  var selector = '.goal-thumbnail';
  var closer = '.close-button';
  
  $(selector).click(function (event){
    event.preventDefault();
    var click = $(this).data('target');
    clickId = '#' + click;
    $(selector).hide('fast');    
    $(clickId).show('fast');
  });

  $(closer).click(function (event){
    event.preventDefault();
    $(clickId).hide('fast');
    $(selector).show('fast');
  });
});