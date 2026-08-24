<?php
/*
Plugin Name: My Custom Shortcodes
Description: Safely adds custom shortcodes to my site.
Version: 1.0
Author: Alextides
*/

/** Start For Custom Contact Form **/
function custom_php_contact_form() {
    $message_output = ''; // Store messages in a variable instead of echoing them immediately

    if ( isset( $_POST['cf_submitted'] ) ) {
        $name    = sanitize_text_field( $_POST['cf_name'] );
        $email   = sanitize_email( $_POST['cf_email'] );
        $subject = sanitize_text_field( $_POST['cf_subject'] );
        $message = esc_textarea( $_POST['cf_message'] );

        if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
            $message_output = '<div class="err-mssg">Please fill in all required fields.</div>';
        } elseif ( ! is_email( $email ) ) {
            $message_output = '<div class="err-mssg">Invalid email address.</div>';
        } else {
            $to = get_option( 'admin_email' );
            
            $headers = array(
                'Content-Type: text/html; charset=UTF-8',
                'Reply-To: ' . $name . ' <' . $email . '>'
            );

            $body = "<h2>New Contact Form Submission</h2>";
            $body .= "<p><strong>Name:</strong> $name</p>";
            $body .= "<p><strong>Email:</strong> $email</p>";
            $body .= "<p><strong>Subject:</strong> $subject</p>";
            $body .= "<p><strong>Message:</strong><br />" . nl2br( $message ) . "</p>";

            if ( wp_mail( $to, $subject, $body, $headers ) ) {
                $message_output = '<div class="ty-mssg">Thank you! Your message has been sent.</div>';
            } else {
                $message_output = '<div class="err-mssg">An error occurred. Please try again later.</div>';
            }
        }
    }

    // Output HTML Form Structure
    ob_start(); ?>
	<div class="contact-container">
        <!-- Display messages inside the form container -->
        <?php echo $message_output; ?> 

		<form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="POST" class="contact-form">
			<h2>Get in Touch</h2>
            <p>We would love to hear from you. Please fill out this form.</p>

			<p class="f-inpt">
				<label for="cf_name">Name (Required)</label>
				<input type="text" name="cf_name" required value="<?php echo isset($_POST['cf_name']) ? esc_attr($_POST['cf_name']) : ''; ?>">
			</p>
			<p class="f-inpt">
				<label for="cf_email">Email (Required)</label>
				<input type="email" name="cf_email" required value="<?php echo isset($_POST['cf_email']) ? esc_attr($_POST['cf_email']) : ''; ?>">
			</p>
			<p class="f-inpt">
				<label for="cf_subject">Subject</label>
				<input type="text" name="cf_subject" value="<?php echo isset($_POST['cf_subject']) ? esc_attr($_POST['cf_subject']) : ''; ?>">
			</p>
			<p class="f-inpt">
				<label for="cf_message">Message (Required)</label>
				<textarea name="cf_message" required rows="6"><?php echo isset($_POST['cf_message']) ? esc_textarea($_POST['cf_message']) : ''; ?></textarea>
			</p>
			<p>
				<input type="submit" name="cf_submitted" value="Send Message" class="submit-btn">
			</p>
		</form>
	</div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'my_custom_contact_form', 'custom_php_contact_form' );
/** End For Custom Contact Form **/
?>
