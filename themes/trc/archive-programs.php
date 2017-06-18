<?php
/**
 * The template for displaying the "What We Do" / Programs archive page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

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

	

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>