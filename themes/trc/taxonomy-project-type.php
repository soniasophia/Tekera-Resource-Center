<?php
/* Template Name: Program Types */

get_header(); ?>

  <header class="projects-header">
    <div class="project-type-hero">
    
    	<div class="project-title-container">
      	<h1 class="projects-title"><a href="#" class="dropdown-arrow" id="projects-toggle-menu"><?php the_archive_title() ?></a></h1>
    	</div>

    <?php wp_nav_menu( array( 'theme_location' => 'what-we-do-sub-menu', 'items_wrap' => '<ul id="%1$s" class="%2$s mobile-top-nav">%3$s</ul>', 'container' => 'div', 'container_class' => 'custom-sub-menu-wrapper' ) ); ?>

    </div>
  </header><!-- .page-header -->


  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="container">





			</div>
		</main>
	</div>

<?php get_footer(); ?>