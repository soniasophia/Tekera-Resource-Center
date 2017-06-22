<?php
/**
 * The template for displaying the What We Do archive page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <header class="projects-header">
    <div class="projects-hero">
      <div class="project-title-container">
        <img id="projects-toggle-menu" class="dropdown-arrow" src="<?php echo get_template_directory_uri();?>/assets/Icons/Mobile/Mobile_png/tekera_mobile_icon_arrow_down_dark_teal.png">

        <h1 class="projects-title"><a href="#" id="projects-toggle-menu"><?php the_archive_title() ?></a></h1>
      </div>

    <?php wp_nav_menu( array( 'theme_location' => 'what-we-do-sub-menu', 'items_wrap' => '<ul id="%1$s" class="%2$s mobile-top-nav">%3$s</ul>', 'container' => 'div', 'container_class' => 'custom-sub-menu-wrapper' ) ); ?>

    </div>
  </header><!-- .page-header -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      
    <section class="overview">
      <h2>Overview</h2>
      <div class="overview-text">
        <p>With the support of ICEF Canada, the Tekera Resource Centre (TRC) operates in three main areas of Health, Education, and Agriculture. At TRC, we operate primary and adult education, medical and dental care, micro-finance loans and training, community-led economic empowerment groups, clean water and sanitization, and a vocational trades school offering; agriculture, tailoring, carpentry, and masonry. These programs service almost 10,000 people living in and around Tekera Village.</p>
      </div>
    </section>

    <section class="projects">
      <h2>Our Projects<span> At Tekera Resource Centre</span></h2>
      <?php $project_types = get_terms(array (
            'taxonomy'=>'project-type',
            'hide_empty'=> 0
          )); 
          if (!empty($project_types) && !is_wp_error($project_types)) : ?>

        <ul class="project-type-list">
            <?php foreach ( $project_types as $project_type ) : ?>

          <li class="project-type">
            <div class="project-heading">
              <h3><?php echo $project_type->name; ?></h3>

              <div class="project-icon">
                <img src="<?php echo get_template_directory_uri() ?>/assets/Icons/Mobile/Mobile_svg/tekera_mobile_icon_<?php echo $project_type->slug ?>.svg " alt="<p><?php echo $term->name; ?></p>">
              </div>

              <div class="project-icon-2">
                <img src="<?php echo get_template_directory_uri() ?>/assets/Icons/Desktop/svg/tekera_icon_<?php echo $project_type->slug ?>.svg " alt="<p><?php echo $term->name; ?></p>">
              </div>
            </div>
              <div class="project-info">
                <p class="project-description"><?php echo $project_type->description; ?></p>
                <div class="learn-more-button">
                  <a class="learn-more" href="<?php echo get_term_link($project_type); ?>">Learn More</a>
                </div>
              </div>
              <div class="border-bottom"></div>
          </li>
          <?php endforeach; ?>
        </ul>
          <?php endif; ?>
    </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>