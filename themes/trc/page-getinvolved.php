<?php 
/* Template Name: Get Involved Template */
get_header(); 
get_the_title();
?>

    <!--<?php wp_nav_menu( array( 'theme_location' => 'get-involved-sub-menu', 'items_wrap' => '<ul id="%1$s" class="%2$s mobile-top-nav">%3$s</ul>', 'container' => 'div', 'container_class' => 'custom-sub-menu-wrapper' ) ); ?>  -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div class = "banner">
      </div>

      <div class = "overview-container">
        <div class = "overview-container-inner">
          <h1> overview </h1>
        </div>

        <div class = "overview-wrapper">
          <h1> get involved with trc </h1>
          <h2> Different ways to get involved with TRC</h2>
            <div class = "sponsor">
              <h3>Sponsor</h3>
              <p>TRC has always strived to provide high quality education in a village setting. As such, we have done our best to make attending school as cost effective and affordable as we can. Your sponsorships covers all school fees, school requirements, and learning materials of students.</p>
              <button type = "button" class = "button"> Learn More </button>
            </div>

            <div class = "internship">
              <h3>Internships</h3>
              <p> In alignment with our goal towards sustainability, TRC is at the stage whereby we do not "need" volunteers to achieve our daily work. We have Ugandan professionals who have proven to be very capable in thier fields, we do, however, welcome anyone willing to help us, expand our skills and contribute theirs. </p>
              <button type = "button" class = "button"> Learn More </button>
            </div>

            <div class = "donate">
              <h3> Donate</h3>
              <p>TRC believes in a sustainable model for progressive community growth. Our low administration fees(less than 1% since 2008) ensure that your full contribution will result in real chaneg at the TRC. </p>
              <button type = "button" class = "button"> Learn More </button>
            </div>
        </div>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>