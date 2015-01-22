<?php session_start(); ?>
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->

<head>
	<meta charset="<?php bloginfo(); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="application-name" content="Drewery Caravan Park"> 
	<meta name="msapplication-TileColor" content="#f100b0"> 
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/win8/ms-tile-icon.png">

	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="shortcut icon" href="/favicon.png">
	<!-- 57x57 (precomposed) for iPhone 3GS, 2011 iPod Touch and older Android devices -->
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/ios/apple-touch-icon.png">
	<!-- 72x72 (precomposed) for 1st generation iPad, iPad 2 and iPad mini -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/ios/apple-touch-icon-72x72.png">
	<!-- 114x114 (precomposed) for iPhone 4, 4S, 5 and 2012 iPod Touch -->
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/ios/apple-touch-icon-114x114.png">
	<!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/ios/apple-touch-icon-144x144.png">

	<title><?php wp_title('|'); ?></title>

<?php wp_head(); ?>
</head>
<body <?php page_bodyclass(); ?>>

	<?php if ( !is_404() ) { get_template_part('navigation', 'top-bar'); } ?>

	<?php
	if (is_page('home')) {
		get_template_part('header', 'home');
	} else if (is_page('contact')) {
		get_template_part('header', 'contact');
	} else if (is_page('signup')) {
		get_template_part('header', 'signup');
	} else if (is_page('beachcomber-bar')) {
		get_template_part('header', 'beachcomber');
	}
	?>
