<?php @session_start();
get_includes('head');
get_includes('header');

if(is_page('about-us')){
	get_includes('about-us');
	get_includes('footer-cta');
}elseif(is_page('properties')){
	get_includes('search-property');
	get_includes('properties');
	get_includes('contact');
	get_includes('footer-cta');
}elseif(is_page('services')){
	get_includes('elevate-real-estate');
	get_includes('services-grid');
	get_includes('unlock-property');
	get_includes('effortless-proeperty');
	get_includes('smart-investment');
	get_includes('footer-cta');
}elseif(is_page('contact')){
	get_includes('get-in-touch');
	get_includes('contact-card');
	get_includes('contact-form');
	get_includes('office-location');
	get_includes('gallery');
	get_includes('footer-cta');
}elseif(is_page('seaside-serenity-villa')){
	get_includes('seaside-gallery');
	get_includes('description');
	get_includes('inquiry-form');
	get_includes('pricing');
	get_includes('faq-propdetails');
	get_includes('footer-cta');
}

?>

<?php if(!is_page('about-us') && !is_page('properties') && !is_page('services') && !is_page('contact') && !is_page('seaside-serenity-villa')) { ?>
<!-- Main -->
<div id="main_area">
  	<div class="wrapper">
  		<main>
				<?php if(!is_front_page()) : ?><div class="breadcrumbs">
					<?php
					if(function_exists('bcn_display'))
					{
						bcn_display();
					}?>
					</div><?php endif; ?>


					
				
				<?php get_template_part( 'loop', 'page' );?>
  		</main>
<div class="clearfix"></div>
  	</div>
  </div>
<!-- End Main -->
<?php } ?>

<?php get_includes('footer');?>

