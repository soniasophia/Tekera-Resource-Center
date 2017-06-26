<?php
/* Template Name: Program Types */

get_header(); ?>

  <header class="projects-header">
    <div class="project-type-hero">

      <div class="project-title-container">
        <h1 class="projects-title">
          <a href="#" class="dropdown-arrow" id="projects-toggle-menu">
            <?php the_archive_title() ?>
          </a>
        </h1>
      </div>

      <?php wp_nav_menu( array( 'theme_location' => 'what-we-do-sub-menu', 'items_wrap' => '<ul id="%1$s" class="%2$s mobile-top-nav">%3$s</ul>', 'container' => 'div', 'container_class' => 'custom-sub-menu-wrapper' ) ); ?>

    </div>
  </header>
  <!-- .page-header -->


  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="container">
        <div class="hero-banner">
          <?php while ( have_posts() ) : the_post(); 
           if(the_post_thumbnail()):
           the_post_thumbnail();
           return;
          endif;
         endwhile; 
        ?>
        </div>




        <div class="tab-acord">
          <ul id="tab-nav">
            <div class="green-line">
              <?php while ( have_posts() ) : the_post(); ?>
              <li>
                <a href="#">
                  <?php echo the_title();?>
                </a>
                <section style="display:flex">
                  <div class="overview-info">
                    <?php echo the_content(); ?>
                  </div>
                </section>
              </li>
              <?php endwhile; ?>

            </div>
    </main>
    </div>


    <div class="global-carousel" data-flickity='{ "cellAlign": "center", "contain": true, "wrapAround": true, "groupCells": true, "groupCells": 2 }'>
      <?php $args = array( 'post_type' => 'SDGs', 'posts_per_page' => 18, 'order' => 'ASC' );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();?>
      <div class="carousel-sub">
        <?php the_post_thumbnail(); ?>
        <div class="carasel-content">
        <?php the_content();?>
        </div>
        <!--<div class="carousel-sub-footer">
          <p>Swipe to see more</p>
        </div>-->
        <!--carousel-sub-footer-->
      </div>
      <!--carousel-sub-->
      <?php endwhile; ?>

    </div>
    <!--global-carousel-->

    <?php get_footer(); ?>