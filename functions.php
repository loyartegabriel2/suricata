<?php

//Cargar el CSS
function suricata_load_styles() {
wp_register_style('theme_style', get_stylesheet_uri(), '', '1.0', 'all');
wp_enqueue_style('theme_style');}
add_action('wp_enqueue_scripts','suricata_load_styles');

// Add theme support for selective refresh for widgets.
add_theme_support( 'customize-selective-refresh-widgets' );

// Add support for Block Styles.
add_theme_support( 'wp-block-styles' );

// Add support for full and wide align images.
add_theme_support( 'align-wide' );



	