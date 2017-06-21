<?php 
/* Template Name: Sponsor */

get_header(); 
get_the_title();
?>

 <header class="sponsor-header">
    <div class="sponsor-hero">
    
    	<div class="project-title-container">
      	<h1 class="sponsor-title"><a href="#" class="dropdown-arrow" id="projects-toggle-menu"><?php the_title() ?></a></h1>
    	</div>

    <?php wp_nav_menu( array( 'theme_location' => 'get-involved-sub-menu', 'items_wrap' => '<ul id="%1$s" class="%2$s mobile-top-nav">%3$s</ul>', 'container' => 'div', 'container_class' => 'custom-sub-menu-wrapper' ) ); ?>

    </div>
  </header>

<?php 
@include "template-parts/cta.php";
get_footer() ?>
