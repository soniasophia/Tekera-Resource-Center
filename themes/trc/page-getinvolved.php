<?php 
/* Template Name: Get Involved Template */
get_header(); 
get_the_title();
?>


<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <div class="banner">
      <div id="submenu">


        <div class="get-involved-sub-menu project-title-container">
          <h1 class="sponsor-title">
            <?php the_title() ?>
            <img id="projects-toggle-menu" class="dropdown-arrow" src="<?php echo get_template_directory_uri();?>/assets/Icons/Mobile/Mobile_png/tekera_mobile_icon_arrow_down_dark_teal.png">
          </h1>
        </div>

        <?php wp_nav_menu( array( 'theme_location' => 'get-involved-sub-menu', 'items_wrap' => '<ul id="%1$s" class="%2$s mobile-top-nav">%3$s</ul>', 'container' => 'div', 'container_class' => 'custom-sub-menu-wrapper' ) ); ?>
      </div>
    </div>

    <div class="overview-container">
      <div class="overview-container-inner">
        <h1> overview </h1>
      </div>

        <div class = "overview-wrapper">
          <h1> Get involved with trc </h1>
          <h2> Different ways to get involved with TRC</h2>
            <div class = "sponsor involvement">
              <h3>Sponsor</h3>
              <p>TRC has always strived to provide high quality education in a village setting. As such, we have done our best to make attending school as cost effective and affordable as we can. Your sponsorships covers all school fees, school requirements, and learning materials of students.</p>
              <a class="learn-more" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Sponsor' ) ) ); ?>"> Learn More </a>
            </div>

            <div class = "internship involvement">
              <h3>Internships</h3>
              <p> In alignment with our goal towards sustainability, TRC is at the stage whereby we do not "need" volunteers to achieve our daily work. We have Ugandan professionals who have proven to be very capable in thier fields, we do, however, welcome anyone willing to help us, expand our skills and contribute theirs. </p>
               <a class="learn-more" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Internship' ) ) ); ?>"> Learn More </a>
            </div>

            <div class = "donate involvement">
              <h3> Donate</h3>
              <p>TRC believes in a sustainable model for progressive community growth. Our low administration fees(less than 1% since 2008) ensure that your full contribution will result in real chaneg at the TRC. </p>
               <a class="learn-more" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Donate' ) ) ); ?>"> Learn More </a>
            </div>
        </div>
      </div>
    </div>

  </main>
  <!-- #main -->
</div>
<!-- #primary -->

<?php get_footer(); ?>