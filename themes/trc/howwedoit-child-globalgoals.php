<?php 
/* Template Name: Global Goals */
get_header(); 
?>


<div class="global-goals-page">  
  <div class="global-goals-hero">
    <div class="how-we-do-it-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'how-we-do-it-sub-menu',
         'items_wrap' => '<ul id="%1$s" class="%2$s mobile-top-nav">%3$s</ul>',
          'container' => 'div', 'container_class' => 'custom-sub-menu-wrapper' ) 
        ); ?>  
    </div><!--how-we-do-it-nav-->  
  <div class="transparency-title-wrapper">
    <h1><?php echo get_the_title(); ?></h1>
  </div><!--transparency-title-wrapper--> 
      
  </div><!--global-goals-hero global-mobile-hero-->

  <div class="sustainability-bar">
    <h2>global sustainability goals</h2>
  </div><!--sunstainability-bar-->    

  <div class="global-goals-content-wrapper">
    <h2>the global goals for sustainability</h2>
    <p>
      In September 2015, 193 world leaders agreed to 17 
      Global Goals for Sustainable Development. If these 
      Goals are completed, it would mean an end to extreme 
      poverty, inequality and climate change by 2030.
    </p>
    <p>
      The Tekera Resource Centre is fully commited to making 
      all necessary efforts  to turn this into a reality. We 
      believe it is in everyone’s hands to create a world with 
      justice and oportunitinities to all of us and our future 
      generations.      
    </p>    
  </div><!--global-goals-content-wrapper-->  

  <div class="compliance-header">
    <p>We currently comply with 
       <span class="compliance-header-bold">
         15 out of 17
       </span>
       Sustainable Development Goals (SDGs) that are related 
       to us!
    </p>   
  </div><!--compliance-header-->  

  <div class="pre-compliance-box">
    <p>
      Check out what we're doing in the SDGs that are related
      to our location!
    </p>  
  </div><!--pre-compliance-box-->  

  <div class="global-carousel" data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true }'> 

  <?php $args = array( 'post_type' => 'SDGs', 'posts_per_page' => 18, 'order' => 'ASC' );
  $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();?>
    <div class="carousel-sub">
      <img src="<?php echo cfs()->get( 'sdg_reversed' ) ?>">
      <h3><?php the_title();?></h3>
      <p><?php the_content();?></p>
      <div class="carousel-sub-footer">
        <p>Swipe to see more</p>
      </div><!--carousel-sub-footer-->        
    </div><!--carousel-sub-->
<?php endwhile; ?>    
                                              
  </div><!--global-carousel-->

  <div class="goal-items-wrapper">
    <?php $args = array( 'post_type' => 'SDGs', 'posts_per_page' => 18, 'order' => 'ASC' );
      $goal_num = 1;
      $goal_attr = 1;
    ?> 
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
    <div class="goal-thumbnail" data-target="goal-<?php echo $goal_attr?>">
      <?php the_post_thumbnail(); ?>  
    </div><!--goal-thumbnail-->  

      <div id="goal-<?php echo $goal_num?>" class="goal-item-content-hidden">
        <div class="goal-content-top">
          <h3><?php the_title();?></h3>
          <h1 class="close-button">X</h1>
        </div><!--goal-content-top-->       
        <div >
          <?php the_content();?>
        </div><!--goal-x-->  

      </div><!--goal-item-content-hidden--> 
      <?php $goal_num += 1?>
      <?php $goal_attr += 1?>      
    <?php endwhile; ?>
  </div><!--global-items-wrapper-->  
  
  <div class="global-goals-triangle-banner">
    <div class="global-triangle-overlay">
      <h2>You Can be part of the change!</h2>
      <p>
         There are many way ways you can contribute to the 
         Tekera Resource Center and help to build a better 
         future for Ugandans!
      </p>
      <div class="button-get-involved">
        <a href="<?php get_template_directory_uri();?>/TRC/get-involved/">get involved</a>
      </div><!--button-get-involved-->      
    </div><!--global-triangle-overlay-->  
  </div><!--global-goals-triangle-banner-->  
</div><!--global-goals-page-->  
<?php get_footer(); ?>