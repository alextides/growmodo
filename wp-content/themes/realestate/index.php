<?php @session_start();
	get_includes('head');
	get_includes('header');
	get_includes('nav');
	get_includes('hero');
?>
<?php if ( is_front_page() ) {
	get_includes('features');
	get_includes('featured-properties');
	get_includes('testimonials');
	get_includes('faq');
	get_includes('footer-cta');
} ?>
<!-- Main -->
<div id="main_area">
  	<div class="wrapper">
  		<main>
			<?php if(!is_front_page()) : ?>
				<div class="breadcrumbs">
				<?php
				if(function_exists('bcn_display'))
				{
					bcn_display();
				}?>
			</div><?php endif; ?>
  		</main>
<div class="clearfix"></div>
  	</div>
  </div>
<!-- End Main -->
 <?php if ( is_front_page() ) {
	get_includes('testimonials');
} ?>
<?php get_includes('footer');?>
