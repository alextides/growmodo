<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_front_page() ) { ?>
			<h1>real estate business website</h1>

		<?php } else { ?>
			<?php if($post->post_content=="" && !is_page('sitemap')) { ?>
				<p>We are still updating our website with contents. Please check back next time.</p>
			<?php } ?>
		<?php } ?>

		<?php echo do_shortcode("[page_intro id='" . get_the_ID() . "']"); ?>
		<div class="entry-content">

			<?php the_content(); ?>
			
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
			<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
		</div>
	</div>
<?php endwhile; ?>

