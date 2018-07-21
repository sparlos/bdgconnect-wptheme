<?php


function startwordpress_google_fonts() {
	wp_register_style('GoogleFonts', 'https://fonts.googleapis.com/css?family=Nanum+Gothic:400,800|PT+Sans:700');
	wp_enqueue_style('GoogleFonts');
}

// Add scripts and stylesheets
function startwordpress_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.6', true );
	//cdns
	wp_register_style('Font_Awesome', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css');
	wp_enqueue_style('Font_Awesome');
	wp_register_style('AOS', 'https://cdnjs.cloudflare.com/ajax/libs/aos/3.0.0-beta.4/aos.css');
	wp_enqueue_style('AOS');
	wp_register_script('AOS_JS', "https://cdnjs.cloudflare.com/ajax/libs/aos/3.0.0-beta.4/aos.js", null, null, true );
	wp_enqueue_script("AOS_JS");

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', null, null, true );
}

add_action ('wp_print_styles', 'startwordpress_google_fonts');
add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );