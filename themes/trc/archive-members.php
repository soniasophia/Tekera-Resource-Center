<?php
/**
 * The template for displaying Members archive page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : ?>

      <header class="page-header">
        <div class="hero-banner">
        </div>
        <h1>Our Ugandan Team</h1>
      </header>
      <!-- .page-header -->
      <div class="single-view">
        
      </div>
      <div class="articles">


        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'full' ); ?>
            <?php endif; ?>
            <div class="text">
              <h2>
              <button class="members-button" type="button" value='<?php echo the_ID() ?>'>
                <?php 
              echo CFS()->get( 'first_name' );
              echo (' ');
              echo CFS()->get( 'last_name' );
            ?>
            </button>
            </h2>
              
              <p class="job-title">
                <?php echo CFS()->get( 'job_title' ); ?>
              </p>

            </div>
          <!-- .entry-header -->
        </article>
        <!-- #post-## -->


        <?php endwhile; ?>

        <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>
      </div>
    </main>
    <!-- #main -->
  </div>
  <!-- #primary -->

  <?php get_footer(); ?>