<?php 
/* Template Name: How We Do It */
get_header(); 
get_the_title();
?>
<?php wp_nav_menu( array( 'theme_location' => 'what-we-do-sub-menu', 'items_wrap' => '<ul id="%1$s" class="%2$s mobile-top-nav">%3$s</ul>', 'container' => 'div', 'container_class' => 'custom-sub-menu-wrapper' ) ); ?>
<div class="how-we-do-it-page">
  <div class="how-hero-wrapper">
  </div><!--how-hero-wrapper-->  
  <div class="how-hero-desktop">
  </div><!--how-hero-desktop-->
  <div class="our-model-content-wrapper">
    <h2>our model</h2>
    <p>We use a variety of approaches to ensure our development practice is:</p>
    <section class="dev-practices">
      <p>Holistic</p>
      <p>Inclusive</p>
      <p>Non-Colonial</p>
      <p>Empowerment</p>
    </section>  
      <div class="how-large-text">
        <p>We believe that supporting a community holistically 
           through a locally driven wellbeing-based development 
           model is the key to ending poverty, increasing health, 
           and growing economically. Our 5 unique programs intersect 
           with one another to create a complementary and supportive 
           framework, ensuring not only inclusion for all members of 
           our community, but also an opportunity to thrive. We also 
           focus on a holistic community approach to development. 
           This is important, as health and wellbeing are intrinsically
           complicated. We address this in all of our programming 
           through incorporating a social determinants of health 
           approach. This approach looks at how factors such as 
           economics, gender, health and wellbeing, education, culture,
           early childhood development, age, class, social inclusion, 
           food security, race, and (dis)ability all factor into 
           decreasing inequity and inequality. ICEF considers all of 
           these when collaborating to implement programs at TRC.
        </p>
        <div class="how-desktop-insert">
          <div class="how-insert-top">
            <div class="how-insert-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/Icons/Desktop/png/tekera_icon_farming_.png">
              <h4>co-operative</h4>
              <h4>farming</h4>
            </div><!--how-insert-box-->  
            <div class="how-insert-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/Icons/Desktop/png/tekera_icon_clinic.png">
              <h4>medical</h4> 
              <h4>clinic</h4>
            </div><!--how-insert-box-->  
            <div class="how-insert-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/Icons/Desktop/png/tekera_icon_women_empowerment.png">
              <h4>women</h4> 
              <h4>empowerment</h4>
            </div><!--how-insert-box-->                          
          </div><!--how-insert-top-->          
          <div class="how-insert-middle">
            <h1>10,000+</h1>
            <h2>people have benefitted from trc</h2>
          </div><!--how-insert-middle-->  
          <div class="how-insert-bottom">
            <div class="how-insert-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/Icons/Desktop/png/tekera_icon_education.png">
              <h4>high-quality</h4>
              <h4>education</h4>
            </div><!--how-insert-box-->  
            <div class="how-insert-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/Icons/Desktop/png/tekera_icon_community.png">
              <h4>community</h4> 
              <h4>work</h4>
            </div><!--how-insert-box-->  
            <div class="how-insert-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/Icons/Desktop/png/tekera_icon_economic.png">
              <h4>economic</h4> 
              <h4>development</h4>
            </div><!--how-insert-box-->                          
          </div><!--how-insert-bottom-->           
        </div><!--how-desktop-insert-->  
        <p class="pesos-content">The Tekera Pesos</p>  
        <p>In order to give real worth to the services offered 
           by the Centre, this local currency was developed by 
           TRC not long after the Centre opened. The Community 
           Work Programme and the Peso took some time to 
           establish, as initially the Centre operated on a 
           ‘promise to work’ concept which was difficult to 
           manage.  The Clinic actually closed down for a week in
           April 2006 because the concept of the Work Programme 
           was untenable.  The founders of TRC then brainstormed 
           ways to make the CWP more effective.   As a result, the 
           Tekera Peso was introduced. The Centre has since worked 
           hard at maintaining the value of the Peso by continuing 
           to be strict about Peso payments and ensuring that Pesos 
           are only awarded to those who have worked one full hour.
           Pesos earned by working at the Centre in the Community Work 
           Programme give the volunteers a sense of being stakeholders 
           in the project.  Community members do small jobs including 
           work on the community farm, maintaining the Centre compound, 
           or repairing designated areas in the community such as roads, 
           tracks and often-used paths. Earning 1 peso per hour or task, 
           it holds a value of 500/= Ugandan shillings (.25 cents Cnd) 
           and can be used as currency in exchange for medical treatment
           or medications in the clinic.  An average cost of treatment 
           at the clinic is approximately  2500 UGX (about $1 dollar).
           Today, the Peso has also created a second economy in the 
           village.  There people can buy and sell Pesos as needed, as 
           well as trade the Peso locally in exchange for basic needs 
           like sugar or salt.          
        </p>  
      </div><!--how-large-text-->     
  </div><!--our-model-content-wrapper-->
  <div id="cta">
    <div id="cta-blue">
      <div id="cta-text">
        <h2>You Can be part of the change!</h2>
        <p>There are many way ways you can contribute to the Tekera Resource Center and help to build a better future for Ugandans!</p>
        <div class="button-get-involved">
          <a href="">Get Involved</a>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>
</div><!--how-we-do-it-page-->
