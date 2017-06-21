<?php 
/* Template Name: Sponsor */

get_header(); 
get_the_title();
?>

<?php wp_nav_menu( array( 'theme_location' => 'get-involved-sub-menu', 'items_wrap' => '<ul id="%1$s" class="%2$s mobile-top-nav">%3$s</ul>', 'container' => 'div', 'container_class' => 'custom-sub-menu-wrapper' ) ); ?>












</div>

<?php 
@include "template-parts/cta.php";
get_footer() ?>
