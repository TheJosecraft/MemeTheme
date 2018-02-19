<!-- Cabecera -->
<?php get_header(); ?>


<!-- Posts -->
<div class="container mt-4">
		<!-- Título de categoría -->
		<h2><?php single_cat_title(); ?></h2>
<?php if (have_posts()) : ?>
	<div class="row">
		<section class="col-md-8">
		<?php while(have_posts()) : the_post(); ?>
			<div class="card text-white bg-primary mb-4">
					<a href="<?php the_permalink(); ?>"><?php echo "<img class='card-img-top img-fluid' src=".get_the_post_thumbnail_url().">"?></a>
					<div class="card-body">
						<h5 class="card-title"><a class="text-white" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
					<time class="card-text text-white float-left" datatime="<?php the_time( 'Y-m-j' ); ?>"><?php the_time( 'j F, Y' ); ?></time>
					<a class="card-text float-right"><?php comments_number(); ?></a>
					</div>
				</div>
			<?php endwhile; ?>
			<div class="pagination">
				<span class="in-left"><?php next_posts_link('<< Entradas antiguas'); ?></span>
				<span class="in-right"><?php previous_posts_link('Entradas más recientes >>'); ?></span>
			</div>
				</section>
			<?php else : ?>
			<p><?php _e( 'Ups!, no hay entradas.' ); ?></p>
			<?php endif; ?>
			<!-- sidebar -->
			<?php get_sidebar(); ?>
			<!-- footer -->
			<?php get_footer(); ?>
	</div>
</div>