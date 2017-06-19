<?php 
/* Template Name: Contact */
get_header(); 
?>

<div class="contact-container">

  <div class="title">
    <h1>
      <?php the_title() ?>
    </h1>
  </div>

  <div class="hero-banner">
  </div>
  
  <div class="content-top">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d493278.0396836172!2d31.508136727511648!3d-0.5459382778413472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19d79b47ef816c93%3A0x86269b4b97b29096!2sTekera+Resource+Centre+Clinic!5e0!3m2!1sen!2sca!4v1497404593897"
        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    <div class="contact-info container">
      <div class="uganda">
        <div class="uganda-icon">
          <?php echo file_get_contents("http://localhost/Tekera/wp-content/themes/trc/assets/Icons/Desktop/svg/Tekera_Icon_Uganda.svg"); ?>
        </div>
        <div class="info-uganda">
          <h2>uganda</h2>
          <div class="address info-div">
            <p>Tekera Resource Center</p>
            <p>Center P.O. Box 960</p>
            <p>Masaka, Uganda</p>
          </div>
          <div class="email info-div">
            <p>E-mail:</p>
            <p>tekeraresourcecenter@gmail.com</p>
          </div>
          <div class="director1 info-div">
            <p>ICEF Country Director</p>
            <p>Maureen Nakalinza</p>
            <p>+256 773 195 441</p>
          </div>
          <div class="director2 info-div">
            <p>TRC Program Coordinator</p>
            <p>Dan Ahimbisibwe</p>
            <p>+256 0701 589 765</p>
          </div>
        </div>
      </div>

      <div class="canada">
        <div class="canada-icon">
          <?php echo file_get_contents("http://localhost/Tekera/wp-content/themes/trc/assets/Icons/Desktop/svg/Tekera_Icon_Canada.svg"); ?>
        </div>
        <div class="info-canada">
          <h2>canada</h2>
          <div class="address info-div">
          </div>
          <p>ICEF</p>
          <p>5730 Sherwood Blvd</p>
          <p>Delta, B.C. V4L 2C6 Canada</p>
          <div class="e-mail info-div">
            <p>E-mail:</p>
            <p>info@icefcanada.org</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="content-bottom">
    <div class="thanks">
      <div class="arrow-down">
      </div>
      <div class="thanks-text">
        <h3>Thank you for your visit</h3>
        <p>You can use the form bleow to send us an e-mail.</p>
      </div>
    </div>

<div class="forms">
      
      <?php while ( have_posts() ) : the_post();?>
      <h4>*Required Fields</h4>
    <?php the_content();
    endwhile; // End of the loop. ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>