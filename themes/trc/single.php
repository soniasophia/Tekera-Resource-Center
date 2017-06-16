<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<div class="social-share">
				<p>Share On</p>
				<div class="social-share-buttons">
					<a class="blog-home-button" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/Icons/Desktop/png/TEKERA_BlogIcon_Green.png"></a>
					<a class="facebook-share-button" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/Icons/Desktop/png/TEKERA_FacebookIcon_Green.png"></a>
					<a class="flickr-share-button" href="https://www.flickr.com/photos/tekeracentre/"><img src="<?php echo get_template_directory_uri();?>/assets/Icons/Desktop/png/TEKERA_FlickrIcon_Green.png"></a>
					<a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=<?php echo get_permalink(); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/Icons/Desktop/png/TEKERA_TwitterIcon_Green.png"></a>
				</div>
			</div>

			<div class="related-posts">
				<p>You Might Also Like</p>
        <div class="more-blog-posts">
          <?php
          // A loop of more blog posts in place of the post navigation function.
          $latestposts = get_posts( array(
        		'posts_per_page' => 3,
            'order' => 'DES'
          ) );
          if ( $latestposts ) {
        	foreach ( $latestposts as $post ) :
      		setup_postdata( $post ); ?>
          
					<div class="blog-post">
						<div class="post-thumbnail-container">
        			<?php the_post_thumbnail('large'); ?>
						</div>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        	</div>
          <?php
          endforeach;
          wp_reset_postdata();
          }
          ?>
				</div>
      </div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
