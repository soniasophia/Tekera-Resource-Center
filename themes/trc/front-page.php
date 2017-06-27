<?php
/* Template Name: Front Page */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <div class="hero-banner">
      <h1>The Power of a Community</h1>
    </div>
  

  <div class = "going-to-school" id = "front-page-banner">
    <div class = "frontpage-overlay-image">
      <div class = "frontpage-info">
      <h2>Empowering versus Giving</h2>
      <p>Tekera Resource centre aims to improve the quality of life for residents of Tekera/Lwega and build a model community by empowering the village through self-sustainability.</p>

      <a class="learn-more-button"  href="<?php echo esc_url( get_permalink( get_page_by_title( 'How We Do It' ) ) ); ?>"> Learn More </a>
    </div>
	</div>
  </div>


  <div class = "programs-info">
    <h1> For the community, by the community; programs that are creating change 
    </h1>
    <div class = "icons-container">
      <div class = "icons-wrapper">
        <p> High Quality Education</p>
      </div>

      <div class = "icons-wrapper">
        <p> Co-operative Farming</p>
      </div>
      <div class = "icons-wrapper">
        <p> Medical Clinic</p>
      </div>
      <div class = "icons-wrapper">
        <p> Economic Development</p>
      </div>
      <div class = "icons-wrapper">
        <p> Women Enpowerment</p>
      </div>
      <div class = "icons-wrapper">
        <p> Community work</p>
      </div>
      <div class = "icons-text">
      </div>
    </div>
  </div>


  <div class = "lunch-program" id = "front-page-banner lunch-school-banner">
    <div class = "frontpage-overlay-image">
      <div class = "frontpage-info">
      <h2 class="global-goals-mobile"> Commitment to the Global Goals </h2>
      <h2 class="global-goals-desktop">Commitment to the Global Goals for Sustainability</h2>
      <p> Tekera Resource Centre goes above and beyond to contribute to a more substainable world.</p>

      <a class="learn-more-button"  href="<?php echo esc_url( get_permalink( get_page_by_title( 'Global Goals' ) ) ); ?>"> Read More </a>
    </div>
    </div>
	</div>


  <div class = "smiling-woman" id = "front-page-banner">
    <div class = "frontpage-overlay-image">
      <div class = "frontpage-info">
      <h2> Be part of the change! </h2>
      <p> TRC offers many ways that you can get invloved in the programs.</p>

      <a class="learn-more-button"  href="<?php echo esc_url( get_permalink( get_page_by_title( 'Get Involved' ) ) ); ?>"> Get Invloved </a>
    </div>
	</div>

  </main>
</div>

<?php get_footer(); ?>