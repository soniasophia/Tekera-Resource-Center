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

      <header class="members-header">
        <div class="hero-banner">
          <div class="submenu">
            <div class="project-title-container">
              <img id="projects-toggle-menu" class="dropdown-arrow" src="<?php echo get_template_directory_uri();?>/assets/Icons/Mobile/Mobile_png/tekera_mobile_icon_arrow_down_dark_teal.png">
              <h2 class="projects-title">About Us</h2>
            </div>
            <?php wp_nav_menu( array( 'theme_location' => 'who-we-are-sub-menu', 'items_wrap' => '<ul id="%1$s" class="%2$s mobile-top-nav">%3$s</ul>', 'container' => 'div', 'container_class' => 'custom-sub-menu-wrapper' ) ); ?>
          </div>
        </div>
        <h1>Our Ugandan Team</h1>
      </header>
      <!-- .page-header -->
      <div id="single-view-member">

      </div>
      <div class="articles-members">


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
              echo esc_html( CFS()->get( 'first_name' ) );
              echo (' ');
              echo esc_html( CFS()->get( 'last_name' ) );
            ?>
            </button>
            </h2>

            <p class="job-title">
              <?php echo esc_html( CFS()->get( 'job_title' ) ); ?>
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