<?php 
/* Template Name: Who We Are */

get_header(); 
get_the_title();
?>
<div class="who-we-are-page">
  <div class="herobanner">
    <div class="project-title-container">
      <img id="projects-toggle-menu" class="dropdown-arrow" src="<?php echo get_template_directory_uri();?>/assets/Icons/Mobile/Mobile_png/tekera_mobile_icon_arrow_down_dark_teal.png">
      <h1 class="projects-title"><?php the_title() ?></h1>
      </div>

    <?php wp_nav_menu( array( 'theme_location' => 'who-we-are-sub-menu', 'items_wrap' => '<ul id="%1$s" class="%2$s mobile-top-nav">%3$s</ul>', 'container' => 'div', 'container_class' => 'custom-sub-menu-wrapper' ) ); ?>
  </div>

  <div class="content">
    <div class="top-content container">
      <h1>
        <?php echo CFS()->get( 'title_1' ); ?>
      </h1>
      <p>
        <?php echo CFS()->get( 'text_1' ); ?>
      </p>
    </div>

    <div class="top-image">
      <div class="top-blue">
        <div class="top-phrase">
          <h2>Our Mission</h2>
          <p>To improve the quality of life for residents of Tekera/Lwega and build a model community.</p>  
        </div>
        
      </div>
    </div>

    <div class="middle-content container">
      <h1>
        <?php echo CFS()->get( 'title_2' ); ?>
      </h1>
      <p>
        <?php echo CFS()->get( 'text_2' ); ?>
      </p>
    </div>

    <div class="bottom-image">
      <div class="bottom-blue">
        <div class="bottom-phrase">
          <h2>Our Goals</h2>
          <ul>
            <li>To provide high-quality health and education services;</li>
            <li>Encourage community development;</li>
            <li>Foster local skills and co-operative groups.</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="bottom-content container">
      <h1>
        <?php echo CFS()->get( 'title_3' ); ?>
      </h1>
      <p>
        <?php echo CFS()->get( 'text_3' ); ?>
      </p>
    </div>
  </div>
  <?php get_template_part( 'template-parts/cta');
  get_footer();
  ?>
</div>