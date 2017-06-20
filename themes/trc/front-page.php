<?php
/* Template Name: Front Page */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

  <!--<div class = "gallery-slider-flickity">-->
    <!--</div>-->
  <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true }'>
    <li class = "gallery-cell">
      <!--<img src="<?php echo get_template_directory_uri();?> /assets/Images/Mobile/home-page/Tekera_Home page_Music dance.png "> -->
    </li>
    <li class = "gallery-cell">
      <!--<img src="<?php echo get_template_directory_uri();?> /assets/Images/Mobile/home-page/Tekera_Home page_Collecting water.png ">-->
    </li>
    <li class = "gallery-cell">
      <!--<img src="<?php echo get_template_directory_uri();?> /assets/Images/Mobile/home-page/Tekera_Home page_Smiling woman.png ">-->
    </li>
  </div>

  <div class = "carousel-text">
    <p> The power of a community </p>
  </div>
  

  <div class = "going-to-school">

    <div class = "frontpage-overlay-image">
      <!--<img src="<?php echo get_template_directory_uri();?> /assets/Triangle overlays/Tekera_TriangleOverlay_MOBILE.png">-->
    </div>

    <div class = "frontpage-info">
      <h2> Empowering versus Giving </h2>
      <p> Tekera Resource centre aims to improve the quality of life for residents of Tekera/Lwega and build a model community by empowering the village through self-sustainability</p>
    </div>

    <button type = "button" class = "button"> Learn More </button>
    
	</div>

  <div class = "programs-info">
    <h1> For the community, by the community; programs that are creating change 
    </h1>
    <div class = "icons-container">

      <div class = "icons-wrapper">
        <!--<img src="<?php echo get_template_directory_uri();?> /assets/Icons/Mobile/Mobile_png/Tekera_Mobile_Icon_Education.png">-->
        <p> High Quality Education</p>
      </div>

      <div class = "icons-wrapper">
        <!--<img src="<?php echo get_template_directory_uri();?> /assets/Icons/Mobile/Mobile_png/Tekera_Mobile_Icon_Farming.png">-->
        <p> Co-operative Farming</p>
      </div>

      <div class = "icons-wrapper">
        <!--<img src="<?php echo get_template_directory_uri();?> /assets/Icons/Mobile/Mobile_png/Tekera_Mobile_Icon_Clinic.png">-->
        <p> Medical Clinic</p>
      </div>

      <div class = "icons-wrapper">
        <!--<img src="<?php echo get_template_directory_uri();?> /assets/Icons/Mobile/Mobile_png/Tekera_Mobile_Icon_Economy.png">-->
        <p> Economic Development</p>
      </div>

      <div class = "icons-wrapper">
        <!--<img src="<?php echo get_template_directory_uri();?> /assets/Icons/Mobile/Mobile_png/Tekera_Mobile_Icon_Women Empowerment .png">-->
        <p> Women Enpowerment</p>
      </div>

      <div class = "icons-wrapper">
        <!--<img src="<?php echo get_template_directory_uri();?> /assets/Icons/Mobile/Mobile_png/Tekera_Mobile icon_Community .png">-->
        <p> Community work</p>
      </div>

      <div class = "icons-text">
        <img src="<?php echo get_template_directory_uri();?> /assets/Icons/Mobile/10,000+ People .png">
      </div>

    </div>
  </div>


  <div class = "lunch-program">

    <div class = "frontpage-overlay-image">
      <!--<img src="<?php echo get_template_directory_uri();?> /assets/Triangle overlays/Tekera_TriangleOverlay_MOBILE.png">-->
    </div>

    <div class = "frontpage-info">
      <h2> Commitment to the Global Goals </h2>
      <p> Tekera Resource Centre goes above and beyond to contribute to a more substainable world </p>
    </div>

    <button type = "button" class = "button"> Learn More </button>

	</div>


  <div class = "smiling-woman">

    <div class = "frontpage-overlay-image">
      <!--<img src="<?php echo get_template_directory_uri();?> /assets/Triangle overlays/Tekera_TriangleOverlay_MOBILE.png">-->
    </div>   

    <div class = "frontpage-info">
      <h2> Be part of the change! </h2>
      <p> TRC offers many ways that you can get invloved in the programs</p>
    </div>

    <button type = "button" class = "button"> Learn More </button>
    
	</div>

  </main>
</div>

  <?php get_footer(); ?>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>