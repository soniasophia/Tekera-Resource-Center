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
			  <h1>Latest news <br class="breakhide">from Tekera!</h1>	
			</div>	

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

     <div class="blog-main-wrapper"> 
			<?php /* Start the Loop */ ?>
  
	    <?php
			  $postArgs = array(
					'order' => 'DES',
					'posts_per_page' => 4,
					'post_type' => 'post',
					'tax_query' => array(
						'taxonomy' => 'category',
						'field' => 'slug',
					),
				);
				$posts = new WP_Query( $postArgs ); ?>

    <?php if ( $posts->have_posts() ) : ?>
			<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>

				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

    	<div class="blog-post-box" style="background-image: url('<?php echo $thumb['0'];?>')">
			  <div class="blog-title-wrapper">
				  <a class="blog-hover" href="<?php the_permalink() ?>">
					  <h3><?php the_title(); ?></h3>
					  <p><?php short_excerpt(get_the_excerpt()); ?>[....]</p>
					</a>
				</div><!--blog-title-wrapper-->
      </div><!--blog-post-box-->
			<?php endwhile; ?>
		<?php endif; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</div><!--blog-main-wrapper-->
    <div class="more-blogs-button more-blogs-button-mobile">
			<button class="more-blogs-button-click"><h2>load more</h2></button>
		</div>			
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>