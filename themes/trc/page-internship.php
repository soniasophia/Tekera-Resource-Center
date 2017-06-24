<?php 
/* Template Name: Internship */

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
          <section style="display:flex">
            <div class = "overview-image" style="background-image: url('<?php echo CFS()->get( 'img_1' ); ?>')">
            </div>
            <div class = "overview-info">
              <h2><?php echo CFS()->get( 'title_1' ); ?></h2>
              <p><?php echo CFS()->get( 'content_1' ); ?></p>
            </div>
          </section>
        </li>

          <li><a href="#">Current Opportunities</a>
          <section>
            <h2><?php echo CFS()->get( 'title_2' ); ?></h2>

            <?php
            $args = array( 'post_type' => 'jobs', 'posts_per_page' => 3 );
            $loop = new WP_Query( $args );?>
            
            <?php
            while ( $loop->have_posts() ) : $loop->the_post();?>

              <div class = "job-post">
                <?php
                echo '<div class="job-title">';?>
                <?php the_title();
                echo '</div>';
                echo '<div class="entry-content">';
                the_content();
                echo '</div>';
                echo '<button type = "button" class = "button"> Apply Now </button>';
                ?>
              </div>
            <?php endwhile;
            ?>

            <div class = "job-info">
              <span> 
                <p>Don't see a position that fits your experience? We are always on the look out for new talent. Feek free to submit an application form describing the expertise you could bring to TRC. </p> 
              </span>
              <button type = "button" class = "button"> Apply Now </button>
            </div>

          </section>
        </li>

          <li><a href="#">Application Form</a>
          <section>
          
            <div id=“test-triangles” >
              <div id=“left-side”>
              </div><!--left-side-->
              <div id=“right-side”>
              </div><!--right-side-->    
            </div><!--test-triangles-->

            <?php while ( have_posts() ) : the_post(); ?> 
            <div class="entry-content-page">
              
                <?php the_content();
                endwhile ?> <!-- Page Content -->
            </div><!-- .entry-content-page -->
          </section>
        </li>
      </div>
    </ul>
  </div>
  

  <!--<div class="fund-project">
    <h1>Fund a Project</h1>
    <img id="mobile-dropdown-menu" class="dropdown-arrow-white" src="<?php echo get_template_directory_uri();?>/assets/Icons/Mobile/Mobile_png/tekera_mobile_icon_arrow_down_dark_teal.png">
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
</div>-->



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
@include "template-parts/cta.php";
get_footer(); ?>

