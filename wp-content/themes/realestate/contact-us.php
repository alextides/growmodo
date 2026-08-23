<?php
get_includes('head');
get_includes('header');
get_includes('banner');
/* Template Name: Contact Us Template */
?>

<!-- Main -->
<div id="main_area">
  	<div class="wrapper">
  		<main>
            <form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="POST" class="custom-contact-form">
                <p>
                    <label for="name">Name (Required)</label><br />
                    <input type="text" name="name" required value="<?php echo isset($_POST['name']) ? esc_attr($_POST['name']) : ''; ?>">
                </p>
                <p>
                    <label for="email">Email (Required)</label><br />
                    <input type="email" name="email" required value="<?php echo isset($_POST['email']) ? esc_attr($_POST['email']) : ''; ?>">
                </p>
                <p>
                    <label for="cf_message">Message (Required)</label><br />
                    <textarea name="message" required rows="6"><?php echo isset($_POST['message']) ? esc_textarea($_POST['message']) : ''; ?></textarea>
                </p>
                <p>
                    <input type="submit" name="submitted" value="Send Message">
                </p>
            </form>
  		</main>
<div class="clearfix"></div>
  	</div>
  </div>
<!-- End Main -->
<?php get_includes('footer');?>

