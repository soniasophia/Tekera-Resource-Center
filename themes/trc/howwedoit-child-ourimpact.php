<?php 
/* Template Name: Our Impact */
get_header(); 
?>
<div class="our-impact-page">  
  <div class="our-impact-hero">
    <div class="how-we-do-it-nav how-we-do-it-nav-mobile">
        <?php wp_nav_menu( array( 'theme_location' => 'how-we-do-it-sub-menu',
         'items_wrap' => '<ul id="%1$s" class="%2$s mobile-top-nav">%3$s</ul>',
          'container' => 'div', 'container_class' => 'custom-sub-menu-wrapper' ) 
        ); ?>  
    </div><!--how-we-do-it-nav how-we-do-it-mobile-->  
    <div class="transparency-title-wrapper">
      <h1><?php echo get_the_title(); ?></h1>
    </div><!--transparency-title-wrapper-->      
  </div><!--our-impact-hero--> 
  <div class="transparency-content-area">
    <h1><?php echo CFS()->get( 'our_impact_post_header' );?></h1>
    <p><?php echo CFS()->get( 'our_impact_post_content' );?></p>
  </div><!--out-impact-content-area-->  


  <div id="cta">
    <div id="cta-blue">
      <div id="cta-text">
        <h2>You Can be part of the change!</h2>
        <p>There are many way ways you can contribute to the 
           Tekera Resource Center and help to build a better 
           future for Ugandans!
        </p>
        <div class="button-get-involved">
          <a href="">Get Involved</a>
        </div><!--button-get-involved-->
      </div><!--cta-text-->
    </div><!--cta-blue-->
  </div><!--cta-->  
</div><!--our-impact-page-->
<?php get_footer(); ?>