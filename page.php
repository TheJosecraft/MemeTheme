<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<div class="container mt-4">
		<div class="row">
			<div class="col-md-8">
<?php if ( have_posts() ) : the_post(); ?>
		<section>
    		<h1><?php the_title(); ?></h1>
    		<?php the_author_posts_link(); ?>
    		<?php the_excerpt(); ?>
    		<?php echo get_the_ID(); ?>
		</section>
		<?php endif; ?>
</div>
<!-- Archivo de barra lateral por defecto -->
<?php get_sidebar(); ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
	</div>
</div>