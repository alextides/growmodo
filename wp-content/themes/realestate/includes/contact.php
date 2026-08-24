<?php
// Catch the submission based on the Server Request Method instead of just the button name
if ( $_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['cf_property_submitted'] ) ) {
    
    // 1. Sanitize input variables safely
    $fname                = sanitize_text_field( $_POST['cf_fname'] ?? '' );
    $lname                = sanitize_text_field( $_POST['cf_lname'] ?? '' );
    $email                = sanitize_email( $_POST['cf_email'] ?? '' );
    $phone                = sanitize_text_field( $_POST['cf_phone'] ?? '' );
    $preferred_location   = sanitize_text_field( $_POST['cf_preferred_location'] ?? '' );
    $property_type        = sanitize_text_field( $_POST['cf_property_type'] ?? '' );
    $no_of_bathrooms      = sanitize_text_field( $_POST['cf_no_of_bathrooms'] ?? '' );
    $no_of_bedrooms       = sanitize_text_field( $_POST['cf_no_of_bedrooms'] ?? '' );
    $budget               = sanitize_text_field( $_POST['cf_budget'] ?? '' );
    $preferred_phone      = sanitize_text_field( $_POST['cf_preferred_phone'] ?? '' );
    $preferred_email      = sanitize_email( $_POST['cf_preferred_email'] ?? '' );
    $message              = esc_textarea( $_POST['cf_message'] ?? '' );
    $terms                = isset( $_POST['cf_terms'] ) ? 'Agreed' : '';

    // 2. Validate required fields (Removed non-existent cf_inquiry_type)
    if ( 
        empty( $fname ) || empty( $lname ) || empty( $email ) || empty( $phone ) || 
        empty( $preferred_location ) || empty( $property_type ) || empty( $no_of_bathrooms ) || 
        empty( $no_of_bedrooms ) || empty( $budget ) || empty( $preferred_phone ) || 
        empty( $preferred_email ) || empty( $message ) || empty( $terms )
    ) {
        echo '<div class="err-mssg" style="color:red; font-weight:bold; margin-bottom:20px;">Please fill in all required fields.</div>';
    } elseif ( ! is_email( $email ) ) {
        echo '<div class="err-mssg" style="color:red; font-weight:bold; margin-bottom:20px;">Invalid email address.</div>';
    } else {
        // 3. Compile and Send Email
        $to = get_option( 'admin_email' );
        
        $headers = array(
            'Content-Type: text/html; charset=UTF-8',
            'Reply-To: ' . $fname . ' ' . $lname . ' <' . $email . '>'
        );

        // Setting a fallback subject since inquiry type doesn't exist
        $subject = "New Property Inquiry from " . $fname . " " . $lname;

        $body = "<h2>New Contact Form Submission</h2>";
        $body .= "<p><strong>Name:</strong> $fname $lname</p>";
        $body .= "<p><strong>Email:</strong> $email</p>";
        $body .= "<p><strong>Phone:</strong> $phone</p>";
        $body .= "<p><strong>Preferred Location:</strong> $preferred_location</p>";
        $body .= "<p><strong>Property Type:</strong> $property_type</p>";
        $body .= "<p><strong>No of Bathrooms:</strong> $no_of_bathrooms</p>";
        $body .= "<p><strong>No of Bedrooms:</strong> $no_of_bedrooms</p>";
        $body .= "<p><strong>Budget:</strong> $budget</p>";
        $body .= "<p><strong>Preferred Phone:</strong> $preferred_phone</p>";
        $body .= "<p><strong>Preferred Email:</strong> $preferred_email</p>";
        $body .= "<p><strong>Terms and Policy:</strong> $terms</p>";
        $body .= "<p><strong>Message:</strong><br />" . nl2br( $message ) . "</p>";

        if ( wp_mail( $to, $subject, $body, $headers ) ) {
            echo '<div class="ty-mssg" style="color:green; font-weight:bold; margin-bottom:20px;">Thank you! Your message has been sent.</div>';
            
            // Clear post variable data so form resets on successful send
            $_POST = array(); 
        } else {
            echo '<div class="err-mssg" style="color:red; font-weight:bold; margin-bottom:20px;">An error occurred with your mail server. Please try again later.</div>';
        }
    }
}
?>


<!-- Start Contact Section -->
  <section class="contact-section">
    <div class="container">
      <div class="section-header">
        <div class="section-icons">
          <img src="<?php bloginfo('template_url');?>/images/img_group.webp" alt="Icon" width="30" height="30">
          <img src="<?php bloginfo('template_url');?>/images/img_group_gray_900_02.webp" alt="Icon" width="18" height="18">
          <img src="<?php bloginfo('template_url');?>/images/img_group_gray_900_02_8x8.webp" alt="Icon" width="8" height="8">
        </div>
        <h2 class="section-title">Let's Make it Happen</h2>
        <p class="section-description">Ready to take the first step toward your dream property? Fill out the form below, and our real estate wizards will work their magic to find your perfect match. Don't wait; let's embark on this exciting journey together.</p>
      </div>
      
      <form class="form-container" action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="POST">
        <div class="form-grid">
          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="firstName">First Name</label>
              <input type="text" id="firstName" name="cf_fname" value="<?php echo isset($_POST['cf_fname']) ? esc_attr($_POST['cf_fname']) : ''; ?>" class="form-input" placeholder="Enter First Name">
            </div>
            <div class="form-group">
              <label class="form-label" for="lastName">Last Name</label>
              <input type="text" id="lastName" name="cf_lname" value="<?php echo isset($_POST['cf_lname']) ? esc_attr($_POST['cf_lname']) : ''; ?>"class="form-input" placeholder="Enter Last Name">
            </div>
            <div class="form-group">
              <label class="form-label" for="email">Email</label>
              <input type="email" id="email" name="cf_email" value="<?php echo isset($_POST['cf_email']) ? esc_attr($_POST['cf_email']) : ''; ?>" class="form-input" placeholder="Enter your Email">
            </div>
            <div class="form-group">
              <label class="form-label" for="phone">Phone</label>
              <input type="tel" id="phone" name="cf_phone" value="<?php echo isset($_POST['cf_phone']) ? esc_attr($_POST['cf_phone']) : ''; ?>" class="form-input" placeholder="Enter Phone Number">
            </div>
          </div>
          
          <div class="form-row">
            <div class="form-group">
              <label for="inquiryType" class="form-label">Preferred Location</label>
              <select id="inquiryType" name="cf_preferred_location" class="form-select" required>
                <option value="">Select Location</option>
                <option value="seaside" <?php selected( $_POST['cf_preferred_location'] ?? '', 'seaside' ); ?>>Seaside Serenity Villa</option>
                <option value="metropolitan" <?php selected( $_POST['cf_preferred_location'] ?? '', 'metropolitan' ); ?>>Metropolitan Haven</option>
                <option value="rustic" <?php selected( $_POST['cf_preferred_location'] ?? '', 'rustic' ); ?>>Rustic Retreat Cottage</option>
                <option value="other" <?php selected( $_POST['cf_preferred_location'] ?? '', 'other' ); ?>>Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inquiryType" class="form-label">Property Type</label>
              <select id="inquiryType" name="cf_property_type" class="form-select" required>
                <option value="">Select Property Type</option>
                <option value="bedroom" <?php selected( $_POST['cf_property_type'] ?? '', 'bedroom' ); ?>>Bedroom</option>
                <option value="bathroom" <?php selected( $_POST['cf_property_type'] ?? '', 'bathroom' ); ?>>Bathroom</option>
                <option value="villa" <?php selected( $_POST['cf_property_type'] ?? '', 'villa' ); ?>>Villa</option>
                <option value="other" <?php selected( $_POST['cf_property_type'] ?? '', 'other' ); ?>>Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inquiryType" class="form-label">No. of Bathrooms</label>
              <select id="inquiryType" name="cf_no_of_bathrooms" class="form-select" required>
                <option value="">Select no. of Bedrooms</option>
                <option value="1" <?php selected( $_POST['cf_no_of_bathrooms'] ?? '', '1' ); ?>>1</option>
                <option value="2" <?php selected( $_POST['cf_no_of_bathrooms'] ?? '', '2' ); ?>>2</option>
                <option value="3" <?php selected( $_POST['cf_no_of_bathrooms'] ?? '', '3' ); ?>>3</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inquiryType" class="form-label">No. of Bedrooms</label>
              <select id="inquiryType" name="cf_no_of_bedrooms" class="form-select" required>
                <option value="">Select no. of Bedrooms</option>
                <option value="1" <?php selected( $_POST['cf_no_of_bedrooms'] ?? '', '1' ); ?>>1</option>
                <option value="2" <?php selected( $_POST['cf_no_of_bedrooms'] ?? '', '2' ); ?>>2</option>
                <option value="3" <?php selected( $_POST['cf_no_of_bedrooms'] ?? '', '3' ); ?>>3</option>
              </select>
            </div>
          </div>
          
          <div class="form-row">
            <div class="form-group">
              <label for="inquiryType" class="form-label">Budget</label>
              <select id="inquiryType" name="cf_budget" class="form-select" required>
                <option value="">Select Budget</option>
                <option value="$100" <?php selected( $_POST['cf_budget'] ?? '', '$100' ); ?>>$100</option>
                <option value="$200" <?php selected( $_POST['cf_budget'] ?? '', '$200' ); ?>>$200</option>
                <option value="$300" <?php selected( $_POST['cf_budget'] ?? '', '$300' ); ?>>$300</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label" for="phone">Preferred Contact Method</label>
              <input type="tel" id="cf_preferred_phone" name="cf_preferred_phone" value="<?php echo isset($_POST['cf_preferred_phone']) ? esc_attr($_POST['cf_preferred_phone']) : ''; ?>" class="form-input" placeholder="Enter Your Phone" inputmode="numeric" pattern="[0-9]*">
            </div>
            <div class="form-group">
              <label class="form-label" for="phone">Email</label>
              <input type="email" id="cf_preferred_email" name="cf_preferred_email" value="<?php echo isset($_POST['cf_preferred_email']) ? esc_attr($_POST['cf_preferred_email']) : ''; ?>" class="form-input" placeholder="Enter Your Email">
            </div>
          </div>
          
          <div class="message-group">
            <label class="form-label" for="message">Message</label>
            <textarea id="message" name="cf_message" class="message-input" placeholder="Enter your Message here.."><?php echo isset($_POST['cf_message']) ? esc_textarea($_POST['cf_message']) : ''; ?></textarea>
          </div>
        </div>
        
        <div class="form-footer">
          <div class="terms-checkbox">
            <input type="checkbox" id="terms" name="cf_terms" value="yes" <?php checked( isset($_POST['cf_terms']) ); ?> class="checkbox-input" required>
            <label for="terms" class="terms-text">
              I agree with <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
            </label>
          </div>
          <input type="submit" name="cf_property_submitted" value="Send Message" class="submit-btn contact-sbmt">
        </div>
      </form>
    </div>
  </section>
<!-- End Contact Section -->