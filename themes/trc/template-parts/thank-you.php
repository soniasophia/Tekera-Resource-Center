<?php
/**
 * Template name: Thank You */

get_header(); ?>
<div class="thank-you-page">
  <div class="thank-you-content"><!--thank-you-page-->
    <div class="thanks-triangle">
      <div class="thanks-triangle-point">
      </div><!--thanks-triangle-point-->  
      <img class="thanks-butterfly" src="<?php echo get_template_directory_uri(); ?>/assets/Icons/thank-you-flower.png">
    </div><!--thanks-triangle-->  
    <section class="thanks-text">
      <h1>thank you !</h1>
      <h3>Your application has been sent succesfully!</h3>
    </section><!--thanks-text-->  
    <div class="thanks-home-button">
      <a href="<?php get_template_directory_uri(); ?>"<h3>back to home</h3></a>
    </div><!--thanks-home-button-->  
  </div><!--thank-you-content-->  
</div><!--thank-you-page-->  


<?php get_footer(); ?>