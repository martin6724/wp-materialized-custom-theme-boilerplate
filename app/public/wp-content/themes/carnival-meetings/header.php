<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CarnivalMeetings
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
</head>

	    <!--=== META TAGS ===-->
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	    <meta name="description" content="Keywords">
	    <meta name="author" content="Name">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	    <!--=== LINK TAGS ===-->
	    <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/path/favicon.ico" />
	    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
	    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	    <!--=== TITLE ===-->
	    <title><?php wp_title(); ?> - <?php bloginfo( 'Carnival Meetings' ); ?></title>

	    <!--=== WP_HEAD() ===-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'carnival-meetings' ); ?></a>


	<header id="masthead" class="site-header">
		<div class="site-branding container">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo left-align left"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
			<div class="brand-logo2 right-align right">
				<img src="<?php echo get_template_directory_uri(); ?>/images/CARNIVAL-MEETING-WEBSITE_02.png">
			</div>

		</div>

<div class="m-container nav">
 <nav id="site-navigation" class="main-navigation" role="navigation">
	 <div class="container">


			 <!-- <div class="nav-wrapper"> -->
				 <?php wp_nav_menu(
					 array (
						 'menu' => 'primary', //the name of the menu you are trying to output
						 'container' => '<div>', //set to UL or DIV, or 'false' for no wrapper
						 // 'container_class' => 'waves-effect waves-light',//the class that is applied to the container
						 // // 'container_id'    => '',//the id that is applied to the container
						 'before' => '<a class="waves-effect waves-light">', //what the a tags themselves are wrapped in
						 'after' => '</a>', //what the a tags themselves are wrapped in
						 // 'link_before' => '<span>', //what the words within the link are wrapped in
						 // 'link_after' => '</span>', //what the words within the link are wrapped in
						 'items_wrap' => '<ul id="main-home-nav" class="center hide-on-med-and-down">%3$s</ul>', //what the LI elements are wrapped in - "%3$s" is the LI list itself. To wrap the LI list in a div, you would use "<div class="YOURCLASS">%3$s</div>"
						 // 'depth' => 2,
					 ) ); ?>
			 </div>

			<!-- </div> -->
		</nav>
	</div>
</div>

<!-- Below, an example of a materializecss nav menu, couldn't get hover effect to work and opted for jquery in homepage.js -->

<!--
<nav>

<ul id="dropdown1" class="dropdown-content">
	<li><a href="#!">one</a></li>
	<li><a href="#!">two</a></li>
	<li class="divider"></li>
	<li><a href="#!">three</a></li>
</ul>

  <div class="nav-wrapper">
    <ul class="right hide-on-med-and-down">
      <li><a href="sass.html">Sass</a></li>
      <li><a href="badges.html">Components</a></li>
      <! Dropdown Trigger -->
      <!-- <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>

</nav> -->


</header>

	<div id="content" class="site-content">
