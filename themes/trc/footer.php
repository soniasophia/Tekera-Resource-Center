<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->
			<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="footer-main-wrapper">
					<div class="footer-top">
					  <div class="footer-box" id="who">
					  	<h2><a href="<?php get_template_directory_uri(); ?>/TRC/who-we-are">who we are</a></h2>
					  	<p><a href="<?php get_template_directory_uri(); ?>/TRC/who-we-are/our-values">Our Values</a></p>
					  	<p class="hider"><a href="<?php get_template_directory_uri(); ?>/TRC/who-we-are/our-history">Our History</a></p>
					    <p class="hider"><a href="">Our Members</a></p>
					  </div><!--footer-box-->	
					  <div class="footer-box" id="how">
					  	<h2><a href="<?php get_template_directory_uri(); ?>/TRC/how-we-do-it">how we do it</a></h2>
					  	<p><a href="<?php get_template_directory_uri(); ?>/TRC/how-we-do-it#holistic">Holistic Approach</a></p>
					  	<p class="hider"><a href="<?php get_template_directory_uri(); ?>/TRC/how-we-do-it#pesos">The 'Tekera Pesos'</a></p>
					  	<p><a href="<?php get_template_directory_uri(); ?>/TRC/how-we-do-it/transparency">Transparency</a></p>
					  </div><!--footer-box-->	
					  <div class="social-media-box">
					  	<h2>follow our stories</h2>
					  	<div class="footer-box-sub">
					    	<a href="<?php get_template_directory_uri(); ?>/TRC/blog/"><img src="<?php echo get_template_directory_uri(); ?>/assets/Icons/Desktop/png/Tekera_Icon_Blog.png"></a>
					  	  <a href="https://www.facebook.com/tekeraresourcecentre/"><img src="<?php echo get_template_directory_uri(); ?>/assets/Icons/Desktop/png/Tekera_Icon_Facebook.png"></a>
					  		<a href="https://www.flickr.com/photos/tekeracentre/"><img src="<?php echo get_template_directory_uri(); ?>/assets/Icons/Desktop/png/Tekera_Icon_Flickr.png"></a>
				     	</div><!--footer-box-sub-->	
	          </div><!--footer-box-->
					</div><!--footer-top-->	
					<div class="footer-bottom">
					  <div id="what" class="footer-box">
              <h2><a href="<?php get_template_directory_uri(); ?>/TRC/projects">what we do</a></h2>
					  	<p class="hider"><a href="<?php get_template_directory_uri(); ?>/TRC/project-type/education/">Education</a></p>
					  	<p class="hider"><a href="<?php get_template_directory_uri(); ?>/TRC/project-type/cooperative-farming/">Co-Operative Farm</a></p>
					  	<p class="hider"><a href="<?php get_template_directory_uri(); ?>/TRC/project-type/healthcare/">Healthcare</a></p>
					  	<p class="hider"><a href="<?php get_template_directory_uri(); ?>/TRC/project-type/community-work/">Community Work</a></p>
					  	<p class="hider"><a href="<?php get_template_directory_uri(); ?>/TRC/project-type/women-empowerment/">Women Empowerment</a></p>
					  	<p class="hider"><a href="<?php get_template_directory_uri(); ?>/TRC/project-type/economic-development/">Economic Development</a></p>					
					  </div><!--footer-box-->
						<div class="footer-box" id="get-involved">
							<h2><a href="<?php get_template_directory_uri(); ?>/TRC/get-involved">get involved</a></h2>
							<p><a href="<?php get_template_directory_uri(); ?>/TRC/get-involved/sponsor">Sponsor</a></p>
							<p><a href="<?php get_template_directory_uri(); ?>/TRC/get-involved/internship">Internship</a></p>
							<p><a href="<?php get_template_directory_uri(); ?>/TRC/get-involved/donate">Donate</a></p>
						</div><!--footer-box-->
            <div class="contact-column tablet-hider">
							<h2><a href="<?php get_template_directory_uri(); ?>/TRC/contact/">contact</a></h2>
							<img class="hider" id="uganda-icon" src="<?php echo get_template_directory_uri(); ?>/assets/Icons/Desktop/png/Tekera_Icon_Uganda.png">
              <img class="hider" id="canada-flag" src="<?php echo get_template_directory_uri(); ?>/assets/Icons/Desktop/png/Tekera_Icon_Canda.png">  							
            </div><!--contact-column-->
						<div class="contact-column-right hider tablet-hider">
						  <h3>Uganda</h3>
						  <p>Tekera Resource Center</p>
						  <p>P.O. Box 960</p>
						  <p>Masaka, Uganda</p>
						  <span class="contact-email hider"><p><a href="mailto:tekeraresourcecentre@gmail.com">tekeraresourcecentre@gmail.com</a></p></span>	
							<span class="contact-spacer"><h3>Canada</h3></span>
							<p>5730 Sherwood Blvd</p>
							<p>Delta BC, Canada</p>
							<p>V4L 2C6</p>	
						  <span class="contact-email"><p><a href="mailto:info@icefcanada.org">info@icefcanada.org</a></p></span>																													
						</div><!--contact-column-right-->	
						<div class="contact-column-outside tablet-hider">
						  <p class="hider">ICEF Country Director</p>
						  <p class="hider">Maureen Nakalinza</p>
						  <p class="hider">+256 773 195 441</p>	
						  <p class="footer-bold hider" id="bottom">TRC Program Coordinator</p> 
						  <p class="hider">Dan Ahimbisibwe</p>
						  <p class="hider">+256 0701 589 765</p>
						</div><!--contact-column-outside-->	
					</div><!--footer-bottom-->	
					<div class="footer-copyright">
					  <p>&copy; 2017 TEKERA RESOURCE CENTRE, All Rights Reserved.</p>
					  <span class="flow-controller"><p>NGO #S.5914/6996</p></span>
					</div><!--footer-copyright-->	
				</div><!--footer-main-wrapper-->	
			</footer><!--#colophon-->
		</div><!--#page-->
		<?php wp_footer(); ?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
	</body>
</html>