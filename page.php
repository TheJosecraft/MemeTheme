<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>
<div class="container mt-4">
	<div class="row">
		<section class="col-md-8">
    		<h1><?php the_title(); ?></h1>
    		<?php the_author_posts_link(); ?>
    		<?php the_excerpt(); ?>
		</section>
		<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->
<?php get_sidebar(); ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
	</div>
</div>