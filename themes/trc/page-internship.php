<?php 
/* Template Name: Internship */

get_header(); 
get_the_title();
?>

<?php wp_nav_menu( array( 'theme_location' => 'get-involved-sub-menu', 'items_wrap' => '<ul id="%1$s" class="%2$s mobile-top-nav">%3$s</ul>', 'container' => 'div', 'container_class' => 'custom-sub-menu-wrapper' ) ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <div class = "get-involved-sub-menu">
      <h1 class="sponsor-title">
        <a href="#" class="dropdown-arrow" id="projects-toggle-menu">
          <?php the_title() ?>
        </a>
      </h1>
    </div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

