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
    <ul id="tab-nav">
      <div class="green-line">
        <li><a href="#">Overview</a>
          <section class="overview-section">
            <img class="overview-image" src="<?php echo CFS()->get( 'overview_image' ); ?>"></img>
            <div class="overview-content">
              <h1><?php echo CFS()->get( 'title_1' ); ?></h1>
              <p><?php echo CFS()->get( 'content_1' ); ?></p>
            </div>
          </section>
        </li>

        <li><a href="#">Sponsor Students & Classrooms</a>
          <section>
            <h1><?php echo CFS()->get( 'title_2' ); ?></h1>
            <p><?php echo CFS()->get( 'content_2' ); ?></p>
            <h2><?php echo CFS()->get( 'title_2a' ); ?></h2>
            <p><?php echo CFS()->get( 'content_2a' ); ?></p>
            <h2 class="alignment"><?php echo CFS()->get( 'title_2b' ); ?></h2>
            <p class="alignment"><?php echo CFS()->get( 'content_2b' ); ?></p>
            <a href="<?php get_template_directory_uri(); ?>/TRC/contact" id="sponsor-now-button">Sponsor Now</a>
          </section>
        </li>

        <li><a href="#">Sponsor a Project</a>
          <section>
            <h1>Sponsor a Project</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </section>
        </li>
      </div>
    </ul>
  </div>

  <div class="heading-tab">
    <h1>Fund a Project</h1>
    <img id="mobile-dropdown-arrow" src="<?php echo get_template_directory_uri();?>/assets/Icons/Mobile/Mobile_png/tekera_mobile_icon_arrow_down_white.png">
  </div>

  <div class="mobile-dropdown">
    <div class="content-dropdown">
      <a href="#" id="option1" class="mobile-content-toggle">Overview</a>
      <a href="#" id="option2" class="mobile-content-toggle">Sponsor Students & Classrooms</a>
      <a href="#" id="option3" class="mobile-content-toggle">Sponsor a Project</a>
    </div>

    <div id="content1" class="option1 content">
      <h1><?php echo CFS()->get( 'title_1' ); ?></h1>
      <p><?php echo CFS()->get( 'content_1' ); ?></p>
    </div>

    <div id="content2" class="option2 content">
      <h1><?php echo CFS()->get( 'title_2' ); ?></h1>
      <p><?php echo CFS()->get( 'content_2' ); ?></p>
      <h2><?php echo CFS()->get( 'title_2a' ); ?></h2>
      <p><?php echo CFS()->get( 'content_2a' ); ?></p>
      <h2><?php echo CFS()->get( 'title_2b' ); ?></h2>
      <p><?php echo CFS()->get( 'content_2b' ); ?></p>
    </div>

    <div id="content3" class="option3 content">
      <h1>Sponsor a Project</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>










<?php 
@include "template-parts/cta.php";
get_footer() ?>
