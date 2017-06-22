<?php 
/* Template Name: Transparency */
get_header(); 
?>
<div class="transparency-page">
  <div class="how-we-do-it-nav">
      <?php wp_nav_menu( array( 'theme_location' => 'how-we-do-it-sub-menu',
       'items_wrap' => '<ul id="%1$s" class="%2$s mobile-top-nav">%3$s</ul>',
        'container' => 'div', 'container_class' => 'custom-sub-menu-wrapper' ) 
      ); ?>  
  </div>
  <div class="transparency-title-wrapper">
    <h1><?php echo get_the_title(); ?></h1>
  </div><!--transparency-title-wrapper-->   
  <div class="transparency-hero">
  </div><!--transparency-hero-->     

</div><!--transparency-page-->  