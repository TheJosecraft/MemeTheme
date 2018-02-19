<!-- Cabecera -->
<?php get_header(); ?>

<!-- Posts -->
<div class="container mt-4">
	<?php if (have_posts()) : ?>
<div class="row">
	<section class="col-md-8">
<?php while(have_posts()) : the_post(); ?>

	<div class="card text-white bg-primary mb-4">
		<a href="<?php the_permalink(); ?>"><?php echo "<img class='card-img-top img-fluid' src=".get_the_post_thumbnail().">"?></a>
		<div class="card-body">
			<h5 class="card-title"><a class="text-white" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
		<time class="card-text text-white float-left" datatime="<?php the_time( 'Y-m-j' ); ?>"><?php the_time( 'j F, Y' ); ?></time>
		<a class="card-text float-right"><?php comments_number(); ?></a>
		</div>
	</div>
<?php endwhile; ?>
<ul class="pagination">
	<li class="pull-left page-item"><?php next_posts_link('<< Entradas antiguas'); ?></li>
	<li class="pull-right page-item"><?php previous_posts_link('Entradas más recientes >>'); ?></li>
</ul>
	</section>
<?php else : ?>
<p><?php _e( 'Ups!, no hay entradas.' ); ?></p>
<?php endif; ?>
<!-- sidebar -->
<?php get_sidebar(); ?>
</div>
<!-- footer -->
<?php get_footer(); ?>
</div>

