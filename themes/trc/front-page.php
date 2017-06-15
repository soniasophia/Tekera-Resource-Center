<?php
/* Template Name: Front Page */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

  <div class = "carousel-cell">
    <?php while ( have_posts() ) : the_post();
      the_content();
      if( function_exists('cyclone_slider') ) cyclone_slider('the-power-of-a-community');
      endwhile; // End of the loop. ?>
  </div>

  <div class = "going-to-school">

    <div class = "frontpage-background-image">
		  <img src="<?php echo get_template_directory_uri();?> /assets/Images/Mobile/home-page/Tekera_Homepage_Mom going by the school .png">
    </div>

    <div class = "frontpage-overlay-image">
      <img src="<?php echo get_template_directory_uri();?> /assets/Triangle overlays/Tekera_TriangleOverlay_MOBILE.png">
    </div>
	</div>

  <div class = "programs-info">
    <h1> For the community, by the community; programs that are creating change 
    </h1>
    <div class = "icons-container">

      <div class = "icons-wrapper">
        <img src="<?php echo get_template_directory_uri();?> /assets/Icons/Mobile/Mobile_png/Tekera_Mobile_Icon_Education.png">
        <p> High Quality Education</p>
      </div>

      <div class = "icons-wrapper">
        <img src="<?php echo get_template_directory_uri();?> /assets/Icons/Mobile/Mobile_png/Tekera_Mobile_Icon_Farming.png">
        <p> Co-operative Farming</p>
      </div>

      <div class = "icons-wrapper">
        <img src="<?php echo get_template_directory_uri();?> /assets/Icons/Mobile/Mobile_png/Tekera_Mobile_Icon_Clinic.png">
        <p> Medical Clinic</p>
      </div>

      <div class = "icons-wrapper">
        <img src="<?php echo get_template_directory_uri();?> /assets/Icons/Mobile/Mobile_png/Tekera_Mobile_Icon_Clinic.png">
        <p> Economic Development</p>
      </div>

      <div class = "icons-wrapper">
        <img src="<?php echo get_template_directory_uri();?> /assets/Icons/Mobile/Mobile_png/Tekera_Mobile_Icon_Women Empowerment .png">
        <p> Women Enpowerment</p>
      </div>

      <div class = "icons-wrapper">
        <img src="<?php echo get_template_directory_uri();?> /assets/Icons/Mobile/Mobile_png/Tekera_Mobile icon_Community .png">
        <p> Community work</p>
      </div>

    </div>
  </div>


  <div class = "lunch-program">

    <div class = "frontpage-background-image">
	  	<img src="<?php echo get_template_directory_uri();?> /assets/Images/Mobile/home-page/Tekera_Homepage_TPS Lunch program .png">
    </div>

    <div class = "frontpage-overlay-image">
      <img src="<?php echo get_template_directory_uri();?> /assets/Triangle overlays/Tekera_TriangleOverlay_MOBILE.png">
    </div>
	</div>

  <div class = "smiling-woman">

    <div class = "frontpage-background-image">
		  <img src="<?php echo get_template_directory_uri();?> /assets/Images/Mobile/home-page/Tekera_Home page_Smiling woman.png">
    </div>

    <div class = "frontpage-overlay-image">
      <img src="<?php echo get_template_directory_uri();?> /assets/Triangle overlays/Tekera_TriangleOverlay_MOBILE.png">
    </div>   
	</div>

  </main>
</div>

  <?php get_footer(); ?>