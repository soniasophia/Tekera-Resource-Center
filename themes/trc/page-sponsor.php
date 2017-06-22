<?php 
/* Template Name: Sponsor */

get_header(); 
get_the_title();
?>

 <header class="sponsor-header">
    <div class="sponsor-hero">
    
    	<div class="project-title-container">
        <img id="projects-toggle-menu" class="dropdown-arrow" src="<?php echo get_template_directory_uri();?>/assets/Icons/Mobile/Mobile_png/tekera_mobile_icon_arrow_down_dark_teal.png">
      
      	<h1 class="sponsor-title"><?php the_title() ?></h1>
    	</div>

    <?php wp_nav_menu( array( 'theme_location' => 'get-involved-sub-menu', 'items_wrap' => '<ul id="%1$s" class="%2$s mobile-top-nav">%3$s</ul>', 'container' => 'div', 'container_class' => 'custom-sub-menu-wrapper' ) ); ?>

    </div>
  </header>

  <div class="tab-acord">
    <ul id="nav">
      <li><a href="#">Overview</a>
        <section>
          <h2><?php echo CFS()->get( 'title_1' ); ?></h2>
          <p><?php echo CFS()->get( 'content_1' ); ?></p>
        </section>
      </li>

        <li><a href="#">Sponsor Students & Classrooms</a>
        <section>
          <h2><?php echo CFS()->get( 'title_2' ); ?></h2>
          <p><?php echo CFS()->get( 'content_2' ); ?></p>
          <h2><?php echo CFS()->get( 'title_2a' ); ?></h2>
          <p><?php echo CFS()->get( 'content_2a' ); ?></p>
          <h2><?php echo CFS()->get( 'title_2b' ); ?></h2>
          <p><?php echo CFS()->get( 'content_2b' ); ?></p>
        </section>
      </li>

        <li><a href="#">Sponsor a Project</a>
        <section>
          <p></p>
        </section>
      </li>
    </ul>
  </div>

  <div class="sponsor-now-button">










<?php 
@include "template-parts/cta.php";
get_footer() ?>
