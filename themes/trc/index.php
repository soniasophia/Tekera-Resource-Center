<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		  <div class="blog-hero">
			  <h1>Latest news from Tekera!</h1>	
			</div>	

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
      <div class="blog-post-box">
			<?php the_post_thumbnail('large') ?>
			  <div class="blog-title-wrapper">
				  <a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3>
					<p><?php short_excerpt(get_the_excerpt()); ?>....</p></a>
				</div><!--blog-title-wrapper-->
				<div class="blog-triangle">
				</div><!--blog-triangle-->	
      </div><!--blog-post-box-->
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
