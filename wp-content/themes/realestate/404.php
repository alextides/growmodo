<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Page not Found</title>
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/404.min.css">
	</head>
<body>
	<div class="protect-me">
	<div class="clearfix">
		<div class = "for-searching">
			<div class="wrapper">
				<div id="post-0" class="post error404 not-found">
					<p class = "fourOfour">404<p>
					<h1 class="entry-title"><?php _e( 'Oops! This is Awkward', 'twentyten' ); ?></h1>
						<p class = "wrongtext"><?php _e( 'Something has gone wrong. The page you were looking for doesn\'t exist.', 'twentyten' ); ?></p>
						<?php get_search_form(); ?>
				</div>
				<script type="text/javascript">
					document.getElementById('s') && document.getElementById('s').focus();
				</script>
			</div>
		</div>
		</div>
	</div>
</body>
</html>
