<!-- Banner -->
<div id="banner">
  <div class="wrapper">
<?php if (is_front_page() ) { ?>

 <?php } else {?>
	<div class="non_ban">
		<figure>
			<?php if (has_post_thumbnail() &&  is_author() && is_category() && is_tag() && is_single()) {?>
				<?php the_post_thumbnail('full');?>
			<?php }else{ ?>
				<img src="<?php bloginfo('template_url'); ?>/images/img_image.webp" alt="yellowish background bright star">
			<?php } ?>
	</figure>
		<div class="page_title">
			<?php if(!is_home() && !is_author() && !is_category() && !is_tag() && !is_single()) { ?>
				<h1 class="h1_title"><?php the_title(); ?></h1>
				<?php echo do_shortcode("[short_title id='" . get_the_ID() . "']"); ?>
			<?php } else { ?>
				<h1 class="headings_title">Blogs</h1>
			<?php } ?>
		</div>
	</div>
	<?php }?>
  </div>
</div>
<!-- End Banner -->
