<?php
/**
 * The template for displaying the What We Do archive page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      
			<header class="projects-header">
        <div class="projects-title">
        <h1><?php the_archive_title() ?></h1>
        </div>

				<?php $project_types = get_terms(array (
            'taxonomy'=>'project-type',
            'hide_empty'=> 0
          )); 
          if (!empty($project_types) && !is_wp_error($project_types)) : ?>

        <div class="project-type-categories">
          <?php foreach ( $project_types as $project_type ) : ?>
            
          <a href="<?php echo get_term_link($project_type); ?>">
          <p><?php echo $project_type->name; ?></p>
          </a>
          <?php endforeach; ?>
        </div>
          <?php endif; ?>

        <div class="projects-hero">
        </div>
			</header><!-- .page-header -->

    <section class="overview">
      <h2>Overview</h2>
      <p>With the support of ICEF Canada, the Tekera Resource Centre (TRC) operates in three main areas of Health, Education, and Agriculture. At TRC, we operate primary and adult education, medical and dental care, micro-finance loans and training, community-led economic empowerment groups, clean water and sanitization, and a vocational trades school offering; agriculture, tailoring, carpentry, and masonry. These programs service almost 10,000 people living in and around Tekera Village.</p>
    </section>

    <section class="Projects">
      <h2>Projects</h2>
      <?php $project_types = get_terms(array (
            'taxonomy'=>'project-type',
            'hide_empty'=> 0
          )); 
          if (!empty($project_types) && !is_wp_error($project_types)) : ?>

        <div class="project-type-list">
          <?php foreach ( $project_types as $project_type ) : ?>
            
          <h3><?php echo $project_type->name; ?></h3>

          <img src="<?php echo get_template_directory_uri() ?>/assets/Icons/Desktop/svg/tekera_icon_<?php echo $project_type->slug ?>.svg " alt="<p><?php echo $term->name; ?></p>">

          <p><?php echo $project_type->description; ?></p>
          <a href="<?php echo get_term_link($project_type); ?>">Learn More</a>
          <?php endforeach; ?>
        </div>
          <?php endif; ?>
    </section>
	

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>