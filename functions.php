<?php

/**
 * Crear nuestros menús gestionables desde el
 * administrador de Wordpress.
 */

function mis_menus() {
  register_nav_menus(
    array(
      'navegation' => __( 'Menú de navegación' ),
    )
  );
}
add_action( 'init', 'mis_menus' );

function theme_styles(){
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'theme_styles');

function theme_js(){
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script('main_js', get_template_directory_uri . '/js/main.js');
}

add_action('wp_enqueue_scripts', 'theme_js');
?>