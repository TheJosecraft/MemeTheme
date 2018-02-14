<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->

	<div class="container">
		<div class="row">
			<?php if ( have_posts() ) : the_post(); ?>
			<section class="col">
				<div class="row">
					<div class="col-md-3">
						<img class="img-responsive" src="<?php the_post_thumbnail() ?>">
					</div>
					<div class="col-md-9">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				    	<p>Escrito por: <?php the_author_posts_link(); ?></p>
				    	<p><?php the_excerpt();?></p>
					</div>
					
				</div>
		    	
			</section>
		<?php endif; ?>
			<!-- Archivo de barra lateral por defecto -->
<?php get_sidebar(); ?>
		</div>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
	</div>

