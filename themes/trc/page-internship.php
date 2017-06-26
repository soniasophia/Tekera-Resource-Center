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
            <div class = "overview-image" style="background-image: url('<?php echo esc_url( CFS()->get( 'img_1' ) ); ?>')">
            </div>
            <div class = "overview-info">
              <h2><?php echo esc_html( CFS()->get( 'title_1' ) ); ?></h2>
              <p><?php echo esc_html( CFS()->get( 'content_1' ) ); ?></p>
            </div>
          </section>
        </li>

          <li><a href="#">Current Opportunities</a>
          <section>
            <h2><?php echo esc_html( CFS()->get( 'title_2' ) ); ?></h2>

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
  

  <div class="heading-tab">
    <h1>Fund a Project</h1>
    <img id="mobile-dropdown-arrow" src="<?php echo get_template_directory_uri();?>/assets/Icons/Mobile/Mobile_png/tekera_mobile_icon_arrow_down_white.png">
  </div>

<div class="mobile-dropdown">
    <div class="content-dropdown">
      <a href="#" id="option1" class="mobile-content-toggle">Overview</a>
      <a href="#" id="option2" class="mobile-content-toggle">Current Opportunities</a>
      <a href="#" id="option3" class="mobile-content-toggle">Application Form</a>
    </div>

    <div id="content1" class="option1 content">
    <img class="overview-image" src="<?php echo esc_url( CFS()->get( 'img_1' ) ); ?>"></img>
      <div class = "overview-content-mobile">
        <h1><?php echo esc_html( CFS()->get( 'title_1' ) ); ?></h1>
        <p><?php echo esc_html( CFS()->get( 'content_1' ) ); ?></p>
      </div>
    </div>

    <div id="content2" class="option2 content">
      <h1><?php echo esc_html( CFS()->get( 'title_2' ) ); ?></h1> 
      <h2><?php echo esc_html( CFS()->get( 'title_2a' ) ); ?></h2> 
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
              <span class = "apply_now_button">
                <button type = "button" class = "button"> Apply Now </button>
              </span>
            </div>   
    </div>

    <div id="content3" class="option3 content">
      <?php while ( have_posts() ) : the_post(); ?> 
         <div class="entry-content-page">  
           <?php the_content();
           endwhile ?> <!-- Page Content -->
         </div><!-- .entry-content-page -->
    </div>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
@include "template-parts/cta.php";
get_footer(); ?>

