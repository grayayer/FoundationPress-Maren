<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php if ( is_category() ) {
			echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(''); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} elseif ( is_single() ) {
			wp_title('');
		} else {
			echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
		} ?></title>
		
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/css/app.css" />

		<link rel="icon" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-precomposed.png">
		
		<?php wp_head(); ?>
	<!-- google fonts-->
	<link href='http://fonts.googleapis.com/css?family=Muli:400,400italic' rel='stylesheet' type='text/css'>


	</head>
	<body <?php body_class(); ?>>
	<?php do_action('foundationPress_after_body'); ?>
	
	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
	
	<?php do_action('foundationPress_layout_start'); ?>
	
	<div class="top-bar-contrast">
		<div class="row">

			<button class="sign-in" data-reveal-id="ruzuku_login" onClick="ga('send', 'event', 'button', 'click', 'login top nav', 4);"><a>Sign In</a></button>

			<div id="ruzuku_login" class="reveal-modal" data-reveal>
				<div class="centered">
					<img src="<?php echo get_stylesheet_directory_uri()?>/images/kids_talk_workshops_logo.svg" width="350">
					<br>				
					<h2>All of our workshops are hosted with Ruzuku.</h2>
					<br>
					<a href="https://ruzuku.com/login" class="button centered primary radius large" onClick="ga('send', 'event', 'button', 'click', 'login modal ruzuku', 4);">Sign in to Ruzuku <i class="icomaren-newtab"></i></a>
				</div>
				<br>
				<p>Forgot your password?  You'll find information on the Ruzuku sign-in page on how to retrieve it. </p>

				<p>Want to register for a workshop?  Take a look at our <a href="/workshops/">Workshop Page</a>.</p>
				<a class="close-reveal-modal">&#215;</a>
			</div>

			<div id="sb-search" class="sb-search">
			    <form  role="search" method="get" id="searchform" action="<?php echo get_site_url(); ?>">
			        <input class="sb-search-input" placeholder="Enter your search term..." type="search" value="" name="s" id="search"> <!-- the name of "s" is what starts our query upon submitting the value of the field and making it a search-->
			        <input class="sb-search-submit" type="submit" value="s">
			        <span class="sb-icon-search"></span>
			    </form>
			</div>


		</div>
	</div>

<!--	<nav class="tab-bar show-for-small-only"> -->
	<nav class="tab-bar hide-for-large-up">

		<section class="left-small">
			<a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
		</section>
		<section class="middle tab-bar-section">
			
			<h1 class="title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>

		</section>
	</nav>



	<?php get_template_part('parts/off-canvas-menu'); ?>

	<?php get_template_part('parts/top-bar'); ?>

<section class="container" role="document">
	<?php do_action('foundationPress_after_header'); ?>