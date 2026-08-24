 <?php
if ( isset( $_POST['cf_submitted_letter'] ) ) {
    $email        = sanitize_email( $_POST['cf_email'] ?? '' );

    if ( empty( $email )) {
        echo '<div class="err-mssg">Please fill in all required fields.</div>';
    } elseif ( ! is_email( $email ) ) {
        echo '<div class="err-mssg">Invalid email address.</div>';
    } else {
        $to = get_option( 'admin_email' );
        $subject = "Newsletter";
        
        $headers = array(
            'Content-Type: text/html; charset=UTF-8',
            'Reply-To: "Newsletter" <' . $email . '>'
        );

        $body = "<h2>New Contact Form Submission</h2>";
        $body .= "<p><strong>Email:</strong> $email</p>";
        

        if ( wp_mail( $to, $subject, $body, $headers ) ) {
            echo '<div class="ty-mssg">Thank you! Your message has been sent.</div>';
        } else {
            echo '<div class="err-mssg">An error occurred. Please try again later.</div>';
        }
    }
}
?>
 <!-- Footer -->
  <footer class="footer">
    <div class="footer-content">
      <div class="footer-top">
        <div class="footer-brand">
          <div class="logo-container">
            <img src="<?php bloginfo('template_url');?>/images/img_symbol.svg" alt="Estatein logo" class="logo-symbol" width="48" height="48" loading="lazy">
            <img src="<?php bloginfo('template_url');?>/images/img_text.svg" alt="Estatein" class="logo-text" width="100" height="20" loading="lazy">
          </div>
          
          <form class="form-container" action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="POST">
            <div class="footer-newsletter">
              <img src="<?php bloginfo('template_url');?>/images/img_icon_gray_500_26x24.svg" alt="Email" class="footer-newsletter-icon-left" width="24" height="26" loading="lazy">
              <input type="email" name="cf_email" value="<?php echo isset($_POST['cf_email']) ? esc_attr($_POST['cf_email']) : ''; ?>" placeholder="Enter Your Email" aria-label="Email address for newsletter">
              <button type="submit" name="cf_submitted_letter" value="Send Newsletter" style="background: #141414;"><img src="<?php bloginfo('template_url');?>/images/img_icon_white_a700_26x30.svg" alt="Subscribe" class="footer-newsletter-icon-right" width="30" height="26" loading="lazy"></button>
            </div>
          </form>
        </div>
        
        <div class="footer-links">
          <div class="footer-column">
            <h3 class="footer-column-title">Home</h3>
            <div class="footer-column-links">
              <a href="#hero" class="footer-link">Hero Section</a>
              <a href="#features" class="footer-link">Features</a>
              <a href="#properties" class="footer-link">Properties</a>
              <a href="#testimonials" class="footer-link">Testimonials</a>
              <a href="#faq" class="footer-link">FAQ's</a>
            </div>
          </div>
          
          <div class="footer-column">
            <h3 class="footer-column-title">About Us</h3>
            <div class="footer-column-links">
              <a href="#story" class="footer-link">Our Story</a>
              <a href="#works" class="footer-link">Our Works</a>
              <a href="#how-it-works" class="footer-link">How It Works</a>
              <a href="#team" class="footer-link">Our Team</a>
              <a href="#clients" class="footer-link">Our Clients</a>
            </div>
          </div>
          
          <div class="footer-column">
            <h3 class="footer-column-title">Properties</h3>
            <div class="footer-column-links">
              <a href="#portfolio" class="footer-link">Portfolio</a>
              <a href="#categories" class="footer-link">Categories</a>
            </div>
          </div>
          
          <div class="footer-column">
            <h3 class="footer-column-title">Services</h3>
            <div class="footer-column-links">
              <a href="#valuation" class="footer-link">Valuation Mastery</a>
              <a href="#marketing" class="footer-link">Strategic Marketing</a>
              <a href="#negotiation" class="footer-link">Negotiation Wizardry</a>
              <a href="#closing" class="footer-link">Closing Success</a>
              <a href="#management" class="footer-link">Property Management</a>
            </div>
          </div>
          
          <div class="footer-column">
            <h3 class="footer-column-title">Contact Us</h3>
            <div class="footer-column-links">
              <a href="#contact-form" class="footer-link">Contact Form</a>
              <a href="#offices" class="footer-link">Our Offices</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="footer-bottom">
      <div class="footer-bottom-content">
        <div class="footer-copyright">
          <p class="footer-copyright-text">@2023 Estatein. All Rights Reserved.</p>
          <a href="#terms" class="footer-copyright-text">Terms & Conditions</a>
        </div>
        
        <div class="footer-social">
          <a href="#facebook" class="footer-social-icon" aria-label="Facebook">
            <img src="<?php bloginfo('template_url');?>/images/img_icon_white_a700_52x52.svg" alt="Facebook" width="24" height="24" loading="lazy">
          </a>
          <a href="#linkedin" class="footer-social-icon" aria-label="LinkedIn">
            <img src="<?php bloginfo('template_url');?>/images/img_icon_52x52.svg" alt="LinkedIn" width="24" height="24" loading="lazy">
          </a>
          <a href="#twitter" class="footer-social-icon" aria-label="Twitter">
            <img src="<?php bloginfo('template_url');?>/images/img_icon_1.svg" alt="Twitter" width="24" height="24" loading="lazy">
          </a>
          <a href="#youtube" class="footer-social-icon" aria-label="YouTube">
            <img src="<?php bloginfo('template_url');?>/images/img_icon_2.svg" alt="YouTube" width="24" height="24" loading="lazy">
          </a>
        </div>
      </div>
    </div>
  </footer>

<script src="<?php bloginfo('template_url');?>/js/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/plugins.min.js"></script>