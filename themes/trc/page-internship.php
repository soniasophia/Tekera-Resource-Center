<?php 
/* Template Name: Internship */

get_header(); 
get_the_title();
?>

    <div class="sponsor-hero">
    	<div id="internship-nav" class="get-involved-sub-menu">
      	<h1 class="sponsor-title"><?php the_title() ?></h1>       
        <img id="projects-toggle-menu" class="dropdown-arrow" src="<?php echo get_template_directory_uri();?>/assets/Icons/Mobile/Mobile_png/tekera_mobile_icon_arrow_down_dark_teal.png">        
        <?php wp_nav_menu( array( 'theme_location' => 'get-involved-sub-menu', 'items_wrap' => '<ul id="%1$s" class="%2$s mobile-top-nav">%3$s</ul>', 'container' => 'div', 'container_class' => 'custom-sub-menu-wrapper' ) ); ?>
      </div>
    </div>

  <div class="tab-acord">
    <ul id="tab-nav">
      <div class="green-line">

        <li><a href="#">Overview</a>
          <section style="display:flex">
            <div class="overview-image-container">
              <img class="overview-image" src="<?php echo esc_url( CFS()->get( 'img_1' ) ); ?>"></img>
            </div>
            <div class = "overview-info">
              <h2><?php echo wp_kses_post( CFS()->get( 'title_1' ) ); ?></h2>
              <p><?php echo wp_kses_post( CFS()->get( 'content_1' ) ); ?></p>
            </div>
          </section>
        </li>

          <li><a href="#">Current Opportunities</a>
          <section>
            <h2><?php echo wp_kses_post( CFS()->get( 'title_2' ) ); ?></h2>

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
                echo '<a href="#option3" class="apply-now">Apply Now</a>';
                ?>
              </div>
            <?php endwhile;
            ?>

            <div class = "job-info">
              <span> 
                <p>Don't see a position that fits your experience? We are always on the look out for new talent. Feek free to submit an application form describing the expertise you could bring to TRC. </p> 
              </span>
              <a href="#option3" class="apply-now">Apply Now</a>
            </div>

          </section>
        </li>

          <li><a href="#">Application Form</a>
          <section>

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
    <h1>Internship</h1>
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
        <h1><?php echo wp_kses_post( CFS()->get( 'title_1' ) ); ?></h1>
        <p><?php echo wp_kses_post( CFS()->get( 'content_1' ) ); ?></p>
      </div>
    </div>

    <div id="content2" class="option2 content">
      <h1><?php echo wp_kses_post( CFS()->get( 'title_2' ) ); ?></h1> 
      <h2><?php echo wp_kses_post( CFS()->get( 'title_2a' ) ); ?></h2> 
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
                echo '<div class="apply-now">';
                echo '<a href="#option3" class="apply-now">Apply Now</a>';
                echo '</div>';
                ?>
              </div>
            <?php endwhile;
            ?>

            <div class = "job-info">
              <span> 
                <p>Don't see a position that fits your experience? We are always on the look out for new talent. Feek free to submit an application form describing the expertise you could bring to TRC. </p> 
              </div>
              <div class = "apply_now_button">
                <a href="#option3" class="apply-now">Apply Now</a>
              </div>
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

