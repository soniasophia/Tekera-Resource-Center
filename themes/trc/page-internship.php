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

            <p>Don't see a position that fits your experience? We are always on the look out for new talent. Feek free to submit an application form describing the expertise you could bring to TRC. </p>

            <!--<button type = "button" class = "button"> Apply Now </button>-->
          </section>
        </li>

          <li><a href="#">Application Form</a>
          <section>
            <p></p>
          </section>
        </li>
      </div>
    </ul>
  </div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
@include "template-parts/cta.php";
get_footer(); ?>

