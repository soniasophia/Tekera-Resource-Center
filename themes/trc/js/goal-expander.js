jQuery(document).ready(function ($){

  var wrapper = '.goal-items-wrapper';
  var expanderHidden = '.goal-item-content-hidden';
  var expanderShown = '.goal-item-content-expanded'
  var selector = '.goal-thumbnail';
  
  $(selector).click(function (event){
    event.preventDefault;
    console.log('there is hope..')
    $(expanderHidden).addClass('goal-item-content-expanded');
    $(expanderShown).removeClass('goal-item-content-hidden');
  });
});