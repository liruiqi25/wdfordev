<?php

function wpb_add_google_fonts() {
	
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Joti+One|Ranga', false);
}

add_action( 'wp_enqueue_scripts','wpb_add_google_fonts');


add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


function my_theme_enqueue_styles() {

    $parent_style = 'twentytwelve-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

