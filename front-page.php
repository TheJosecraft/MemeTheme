<!-- Cabecera -->
<?php get_header(); ?>

<!-- Posts -->
<div class="container mt-4">
	<?php if (have_posts()) : ?>
<div class="row">
	<section class="col-md-8">
<?php while(have_posts()) : the_post(); ?>
			<article>
				<header>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<time datatime="<?php the_time( 'Y-m-j' ); ?>"><?php the_time( 'j F, Y' ); ?></time>
					<?php the_category(); ?>
				</header>
				<?php the_excerpt(); ?>
				<footer>
					<address>Por <?php the_author_posts_link(); ?></address>
				</footer>
			</article>
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

