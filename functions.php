<?php

//add styles theme

add_action('wp_enqueue_scripts','add_styles');

function add_styles(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('Futura PT', get_template_directory_uri() . '/assets/fonts/Futura PT/stylesheet.css');
    wp_enqueue_style('Montserrat', get_template_directory_uri() . '/assets/fonts/Montserrat/stylesheet.css');
    wp_enqueue_style('Lato', get_template_directory_uri() . '/assets/fonts/Lato/lato.css');
    wp_enqueue_style('Helventica Neue', get_template_directory_uri() . '/assets/fonts/Helventica Neue/stylesheet.css');
    wp_enqueue_style('Bootstrao-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.css');
}

//#######################################################################################################################

//add scripts theme

add_action('wp_footer', 'add_scripts');

function add_scripts(){
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', 'jquery' );
}

//########################################################################################################################