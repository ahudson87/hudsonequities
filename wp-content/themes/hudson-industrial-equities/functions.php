<?php

function hie_theme_styles() {
	wp_enqueue_style( 'reset_css', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'app_css', get_template_directory_uri() . '/css/app.css' );
	wp_enqueue_style( 'no-touch_css', get_template_directory_uri() . '/css/no-touch.css' );
	wp_enqueue_style( 'icomoon_font', get_template_directory_uri() . '/fonts/icomoon/style.css' );

	wp_register_script( 'modernizr', get_template_directory_uri() .'/js/modernizr.js');
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'google-recaptcha', 'https://www.google.com/recaptcha/api.js' );
}

add_action( 'wp_enqueue_scripts', 'hie_theme_styles' );

function hie_theme_js() {
	wp_enqueue_script( 'jquery' );
	wp_register_script( 'foundation_js', get_template_directory_uri() .'/js/foundation.min.js');
	wp_enqueue_script( 'foundation_js' );
	wp_register_script( 'app_js', get_template_directory_uri() .'/js/app.js', 'jquery');
	wp_enqueue_script( 'app_js' );
}

add_action( 'wp_enqueue_scripts', 'hie_theme_js' );

register_nav_menus( array(
	'header'   => __( 'Header menu', 'hudson-industrial-equities' ),
	'footer' => __( 'Footer menu', 'hudson-industrial-equities' ),
) );

add_theme_support( 'post-thumbnails' );

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'hie_about_bio',
		array(
			'labels' => array(
			'name' => __( 'Bios' ),
			'singular_name' => __( 'Bio' )
		),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-universal-access',
			'supports' => array( 'title', 'editor', 'thumbnail' ),
		)
	);
	register_post_type( 'hie_development',
		array(
			'labels' => array(
			'name' => __( 'Developments' ),
			'singular_name' => __( 'Development' )
		),
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array('category'),
			'menu_icon' => 'dashicons-clipboard',
			'supports' => array( 'title', 'editor', 'thumbnail' ),
		)
	);
	register_post_type( 'hie_press_release',
		array(
			'labels' => array(
			'name' => __( 'Press Releases' ),
			'singular_name' => __( 'Press Release' )
		),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-format-aside',
			'supports' => array( 'title', 'editor', 'excerpt' ),
		)
	);
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}


function comicpress_copyright() {
	global $wpdb;
	$copyright_dates = $wpdb->get_results("
		SELECT
		YEAR(min(post_date_gmt)) AS firstdate,
		YEAR(max(post_date_gmt)) AS lastdate
		FROM
		$wpdb->posts
		WHERE
		post_status = 'publish'
	");
	$output = '';
	if($copyright_dates) {
		$copyright = "All Rights Reserved. Hudson Industrial Equities ";
		$copyright .= "© " . $copyright_dates[0]->firstdate;
		if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
			$copyright .= '-' . $copyright_dates[0]->lastdate;
		}
			$output = $copyright;
		}
		return $output;
}


?>