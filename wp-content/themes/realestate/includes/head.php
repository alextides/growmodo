<!DOCTYPE html>
	<html class="no-js" lang="en-US">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="dns-prefetch" href="https://google-analytics.com" />
		<link rel="preconnect" href="https://gstatic.com" crossorigin/>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link href='https://fonts.googleapis.com/css?family=Urbanist' rel='stylesheet'>

		<title><?php echo get_bloginfo('name');?></title>

		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/gm-style.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/media.min.css">

		<!-- Blog Activation -->
		<?php if(!is_home()){ ?>
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/blog.min.css">
		<?php }?>

		<?php if(is_page('about-us')) { ?>
				<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/about.min.css">
		<?php } elseif(is_page('properties')){?>
				<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/properties.min.css">
		<?php } elseif(is_page('services')){?>
			<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/services.min.css">
		<?php } elseif(is_page('contact')){?>
			<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/contact.min.css">
		<?php } elseif(is_page('seaside-serenity-villa')){?>
			<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/propdetail.min.css">
		<?php }?>

		<!--Admin Responsive-->

		<?php if ( is_user_logged_in() ) { ?>
		<style>
		@media only screen
		and (max-width : 800px) {

		}
		@media only screen
		and (max-width : 782px) {
		nav.toggle_right_style{top:46px;}
		}
		</style>
		<?php }?>

		<?php wp_head(); ?>
	</head>
	<body>
		<div class="protect-me">
			<div class="clearfix">
