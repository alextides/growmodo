<?php
if ( isset( $_POST['cf_submitted'] ) ) {
    $fname        = sanitize_text_field( $_POST['cf_fname'] ?? '' );
    $lname        = sanitize_text_field( $_POST['cf_lname'] ?? '' );
    $email        = sanitize_email( $_POST['cf_email'] ?? '' );
    $phone        = sanitize_text_field( $_POST['cf_phone'] ?? '' );
    $inquirytype  = sanitize_text_field( $_POST['cf_inquiry_type'] ?? '' );
    $about_us     = sanitize_text_field( $_POST['cf_how_did_you_hear_about_us'] ?? '' );
    $terms        = isset( $_POST['cf_terms'] ) ? 'Agreed' : '';
    $message      = esc_textarea( $_POST['cf_message'] ?? '' );

    if ( empty( $fname ) || empty( $lname ) || empty( $email ) || empty( $phone ) || empty( $inquirytype ) || empty( $about_us ) || empty( $terms ) || empty( $message ) ) {
        echo '<div class="err-mssg">Please fill in all required fields.</div>';
    } elseif ( ! is_email( $email ) ) {
        echo '<div class="err-mssg">Invalid email address.</div>';
    } else {
        $to = get_option( 'admin_email' );
        
        $headers = array(
            'Content-Type: text/html; charset=UTF-8',
            'Reply-To: ' . $fname . ' ' . $lname . ' <' . $email . '>'
        );

        $body = "<h2>New Contact Form Submission</h2>";
        $body .= "<p><strong>Name:</strong> $fname</p>";
        $body .= "<p><strong>Email:</strong> $email</p>";
        $body .= "<p><strong>Phone:</strong> $phone</p>";
        $body .= "<p><strong>Inquiry Type:</strong> $inquirytype</p>";
        $body .= "<p><strong>How They Heard:</strong> $about_us</p>";
        $body .= "<p><strong>Terms and Policy:</strong> $terms</p>";
        $body .= "<p><strong>Message:</strong><br />" . nl2br( $message ) . "</p>";

        if ( wp_mail( $to, $inquirytype, $body, $headers ) ) {
            echo '<div class="ty-mssg">Thank you! Your message has been sent.</div>';
        } else {
            echo '<div class="err-mssg">An error occurred. Please try again later.</div>';
        }
    }
}
?>

<!-- Start Contact form section -->
<section class="form-section">
  <div class="section-header">
    <div class="decorative-icons">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/images/img_group.webp' ); ?>" alt="" class="decorative-icon-1" width="30" height="30">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/images/img_group_gray_900_02.webp' ); ?>" alt="" class="decorative-icon-2" width="18" height="18">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/images/img_group_gray_900_02_8x8.webp' ); ?>" alt="" class="decorative-icon-3" width="8" height="8">
    </div>
    <div>
      <h2 class="section-title">Let's Connect</h2>
      <p class="section-description">We're excited to connect with you and learn more about your real estate goals. Use the form below to get in touch with Estatein. Whether you're a prospective client, partner, or simply curious about our services, we're here to answer your questions and provide the assistance you need.</p>
    </div>
  </div>
  
  <form class="form-container" action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="POST">
    <div class="form-content">
      <div class="form-row">
        <div class="form-group">
          <label for="firstName" class="form-label">First Name</label>
          <input type="text" id="firstName" name="cf_fname" value="<?php echo isset($_POST['cf_fname']) ? esc_attr($_POST['cf_fname']) : ''; ?>" class="form-input" placeholder="Enter First Name" required>
        </div>
        <div class="form-group">
          <label for="lastName" class="form-label">Last Name</label>
          <input type="text" id="lastName" name="cf_lname" value="<?php echo isset($_POST['cf_lname']) ? esc_attr($_POST['cf_lname']) : ''; ?>" class="form-input" placeholder="Enter Last Name" required>
        </div>
        <div class="form-group">
          <label for="email" class="form-label">Email</label>
          <input type="email" id="email" name="cf_email" value="<?php echo isset($_POST['cf_email']) ? esc_attr($_POST['cf_email']) : ''; ?>" class="form-input" placeholder="Enter your Email" required>
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-group">
          <label for="phone" class="form-label">Phone</label>
          <input type="tel" id="phone" name="cf_phone" value="<?php echo isset($_POST['cf_phone']) ? esc_attr($_POST['cf_phone']) : ''; ?>" class="form-input" placeholder="Enter Phone Number" required>
        </div>
        <div class="form-group">
          <label for="inquiryType" class="form-label">Inquiry Type</label>
          <select id="inquiryType" name="cf_inquiry_type" class="form-select" required>
            <option value="">Select Inquiry Type</option>
            <option value="buying" <?php selected( $_POST['cf_inquiry_type'] ?? '', 'buying' ); ?>>Buying Property</option>
            <option value="selling" <?php selected( $_POST['cf_inquiry_type'] ?? '', 'selling' ); ?>>Selling Property</option>
            <option value="investment" <?php selected( $_POST['cf_inquiry_type'] ?? '', 'investment' ); ?>>Investment Opportunities</option>
            <option value="other" <?php selected( $_POST['cf_inquiry_type'] ?? '', 'other' ); ?>>Other</option>
          </select>
        </div>
        <div class="form-group">
          <label for="hearAbout" class="form-label">How Did You Hear About Us?</label>
          <select id="hearAbout" name="cf_how_did_you_hear_about_us" class="form-select" required>
            <option value="">Select</option>
            <option value="search" <?php selected( $_POST['cf_how_did_you_hear_about_us'] ?? '', 'search' ); ?>>Search Engine</option>
            <option value="social" <?php selected( $_POST['cf_how_did_you_hear_about_us'] ?? '', 'social' ); ?>>Social Media</option>
            <option value="referral" <?php selected( $_POST['cf_how_did_you_hear_about_us'] ?? '', 'referral' ); ?>>Referral</option>
            <option value="advertisement" <?php selected( $_POST['cf_how_did_you_hear_about_us'] ?? '', 'advertisement' ); ?>>Advertisement</option>
            <option value="other" <?php selected( $_POST['cf_how_did_you_hear_about_us'] ?? '', 'other' ); ?>>Other</option>
          </select>
        </div>
      </div>
      
      <div class="form-group">
        <label for="message" class="form-label">Message</label>
        <textarea id="message" name="cf_message" class="form-textarea" placeholder="Enter your Message here.." required><?php echo isset($_POST['cf_message']) ? esc_textarea($_POST['cf_message']) : ''; ?></textarea>
      </div>
    </div>
    
    <div class="form-footer">
      <div class="checkbox-container">
        <input type="checkbox" id="terms" name="cf_terms" value="yes" <?php checked( isset($_POST['cf_terms']) ); ?> class="checkbox-input" required>
        <label for="terms" class="checkbox-label">
          I agree with <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
        </label>
      </div>
      <input type="submit" name="cf_submitted" value="Send Message" class="submit-btn">
    </div>
  </form>
</section>
<!-- End Contact form section -->
