<?php
/**
 * The template for displaying the What We Do archive page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="page-header">
				<?php $project_types = get_terms(array (
            'taxonomy'=>'project-type',
            'hide_empty'=> 0
          )); 
          if (!empty($project_types) && !is_wp_error($project_types)) : ?>

        <div class="program-type-categories">
          <?php foreach ( $project_types as $project_type ) : ?>
            
          <a href="<?php echo get_term_link($project_type); ?>">
          <p><?php echo $project_type->name; ?></p>
          </a>
          <?php endforeach; ?>
        </div>
          <?php endif; ?>
			</header><!-- .page-header -->

	

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>