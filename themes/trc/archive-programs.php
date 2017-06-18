<?php
/**
 * The template for displaying the "What We Do" / Programs archive page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php $program_types = get_terms(array (
            'taxonomy'=>'program-type',
            'hide_empty'=> 0
          )); 
          if (!empty($program_types) && !is_wp_error($program_types)) : ?>

        <div class="program-type-categories">
          <?php foreach ( $program_types as $program_type ) : ?>
            
          <a href="<?php echo get_term_link($program_type); ?>">
          <p><?php echo $program_type->name; ?></p>
          </a>
          <?php endforeach; ?>
        </div>
          <?php endif; ?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>