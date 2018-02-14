<?php

/**
 * Crear nuestros menús gestionables desde el
 * administrador de Wordpress.
 */
function mis_menus() {
  register_nav_menus(
    array(
    	'navigation'=>__('Menu de navegación'),
      
    )
  );
}
add_action( 'init', 'mis_menus' );

/*
* Añade los archivos de css al código html
*/

function theme_styles(){
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'theme_styles');

/*
* Añade los archivos de javascript al código html
*/
function theme_js(){
  wp_enqueue_script('jquery_js', get_template_directory_uri() . '/js/jquery-3.3.1.min.js');
  wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js');
}

add_action('wp_enqueue_scripts', 'theme_js');
/**
 * Crear una zonan de widgets que podremos gestionar
 * fácilmente desde administrador de Wordpress.
 */

function mis_widgets(){
 register_sidebar(
   array(
       'name'          => __( 'Sidebar' ),
       'id'            => 'sidebar',
       'before_widget' => '<div class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3>',
       'after_title'   => '</h3>',
   )
 );
}
add_action('init','mis_widgets');

/*
* Añade soporte para poder asignar imágenes destacadas en nuestras entradas
*/

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 200, 200);

add_filter('next_posts_link', 'posts_link_attributes');
add_filter('previous_posts_link', 'posts_link_attributes');

function posts_links_attributes(){
  return 'class="page-link"';
}
?>

