<?php

add_filter( 'wp_title', 'my_title', 10, 2 );
function my_title( $title, $sep ) {
  global $paged, $page;
  
  $title .= get_bloginfo('name');
  return $title;
  
}

add_action( 'wp_enqueue_scripts', 'enqueue_theme_scripts' );
function enqueue_theme_scripts() {

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://code.jquery.com/jquery-2.1.3.min.js", false, false, true );
	wp_enqueue_script( 'jquery', false, false, true );
	wp_enqueue_script( 'fontloader', get_stylesheet_directory_uri() . '/scripts/fontloader.min.js', false, false, false );
	wp_enqueue_script( 'app', get_stylesheet_directory_uri() . '/scripts/app.min.js', 'jquery', false, true );
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );

}

// Add Open Graph tags per page
add_action( 'wp_head', 'add_open_graph_tags' );
function add_open_graph_tags() {
	
	global $post;
	
	if ( is_home() ) {
		echo '<meta property="og:type" content="website">';
		echo '<meta property="og:url" content="' . get_bloginfo( 'url' ) . '">';
		echo '<meta property="og:title" content="' . esc_attr( get_bloginfo( 'name' ) ) . '">';
		echo '<meta property="og:image" content="">';
		echo '<meta property="og:description" content="' . esc_attr( get_bloginfo( 'description' ) ) . '">';
	}
	elseif ( is_singular() ) {
		echo '<meta property="og:type" content="article">';
		echo '<meta property="og:url" content="' . get_permalink() . '">';
		echo '<meta property="og:title" content="' . esc_attr( get_the_title() ) . '">';
		if ( has_post_thumbnail( $post->ID ) ) {
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
			echo '<meta property="og:image" content="' . esc_attr( $image[0] ) . '">';
		}
		echo '<meta property="og:description" content="' . esc_attr( get_the_excerpt() ) . '">';
	}
}


// Remove query strings from static resources
add_filter('script_loader_src', 'remove_script_version', 15, 1);
add_filter('style_loader_src', 'remove_script_version', 15, 1);
function remove_script_version($src) {
  $parts = explode('?', $src);
  return $parts[0];
}


// Setup theme specific features
add_action( 'after_setup_theme', 'setup_theme_features' );
function setup_theme_features() {
	
	add_theme_support( 'post-thumbnails' );
	
}

// Remove ie.css from Admin panel
add_action( 'wp_default_styles', 'remove_ie_from_admin' );
function remove_ie_from_admin( $wp_styles ) {
	
	$wp_styles->remove( 'ie' );
	
}

// Allow email address as login username_exists
add_action( 'wp_authenticate', 'allow_email_address_login' );
function allow_email_address_login( $username ) {
	
	$user = get_user_by( 'email', $username );
	if( ! empty( $user->user_login ) ) {
		$username = $user->user_login;
	}
	return $username;
	
}

// Add my contact details to toolbar
add_action( 'wp_before_admin_bar_render', 'add_my_contact_details' );
function add_my_contact_details() {
	
	global $wp_admin_bar;
	$wp_admin_bar->add_node(
		array(
			'id' => 'contact-designer',
			'title' => 'Contact Designer',
			'href' => 'http://gerrytucker.co.uk/contact/',
			'meta' => array( 'target', '_blank' )
		)
	);
	
}

// Send headers
add_action( 'send_headers', 'set_ie_edge' );
function set_ie_edge() {

	header( 'X-UA-Compatible: IE=edge,chrome=1' );
	
}

// Add class to page body
function page_bodyclass() {
	global $wp_query;
	$page = '';
	if (is_front_page()) {
		$page = 'home';
	} elseif (is_404()) {
		$page = 'error404';
	} elseif (is_page()) {
		$page = $wp_query->query_vars["pagename"];
	}
	if ($page)
		echo 'class="' . $page . '"';
}
