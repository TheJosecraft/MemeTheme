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
	wp_enqueue_style('main_css', get_template_directory_uri() . 'style.css');
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style( 'fontawesome_css', get_template_directory_uri() . '/css/fontawesome-all.min.css' );	
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
	   'name'          => __( 'sidebar' ),
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
set_post_thumbnail_size( 600, 800);

add_filter('next_posts_link', 'posts_link_attributes');
add_filter('previous_posts_link', 'posts_link_attributes');

function posts_links_attributes(){
  return 'class="page-link"';
}

// activar comentarios anidados por defecto
function enable_threaded_comments(){
 if (!is_admin()) {
  if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
   wp_enqueue_script('comment-reply');
  }
}
add_action('get_header', 'enable_threaded_comments');

function miFormularioDeComentarios($fields){
	$commenter = wp_get_current_commenter();
	$user = wp_get_current_user();
	$nick = $user->exist() ? $user->display_name : '';
	$req = get_option('require_name_email');
	$fields['author'] = '<div class="form-group">
						<label class="sr-only" for="author">Name</label>
						<input type="text" id="author" class="form-control" name="author" placeholder="Name" value="' . esc_attr($commenter['comment_author']) . '" required>
						</div>';
	$fields['email'] = '<div class="form-group">
						<label class="sr-only" for="email">Name</label>
						<input type="email" id="email" class="form-control" name="email" placeholder="E-mail" value="' . esc_attr($commenter['comment_author_email']) . '" required>
						</div>';
	// $fields['url'] = '';

	$fields['comment_field'] = '<div class="form-group">
								<textarea class="form-control" id="comment" name="comment" rows="6" placeholder="Comment" required></textarea>
								</div>';

	$fields['submit_field'] = '<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit btn btn-primary" value="Publicar comentario">'.get_comment_id_fields().'</p>';
	return $fields;
}

add_filter('comment_form_default_fields','miFormularioDeComentarios');

//quitar campo de comentario por defecto
function my_form_defaults($defaults){
	if(!is_user_logged_in()){
		if(isset($defaults['comment_field'])){
			$defaults['comment_field'] = '';
			$defaults['submit_field'] = '';
		}
	}else{
		$defaults['comment_field'] = '<div class="form-group">
									 <textarea class="form-control" id="comment" name="comment" rows="6" placeholder="Comentario.." required></textarea>
									 </div>';
		$defaults['submit_field'] = '<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit btn btn-primary" value="Publicar comentario">'.get_comment_id_fields().'</p>';							 
	}

	return $defaults;
}

add_filter('comment_form_defaults','my_form_defaults');

require_once( 'better_comments.php' );
?>

