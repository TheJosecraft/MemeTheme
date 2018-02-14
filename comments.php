<?php
if ( post_password_required() )
	return;
?>
 
<div id="comments" class="comments-area">
 
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _nx( '1 comentario', '%1$s comentarios', get_comments_number(), 'comments title', 'twentythirteen' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>
 
		<ul class="comment-list">
			<?php
				wp_list_comments( array(
					'callback' => 'better_comments'
				) );
			?>
		</ul><!-- .comment-list -->
 
		<?php
			// Are there comments to navigate through?
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="navigation comment-navigation" role="navigation">
			<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
		</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>
 
		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php _e( 'Los comentarios están cerrados.' , 'twentythirteen' ); ?></p>
		<?php endif; ?>
 
	<?php endif; // have_comments() ?>
 
	<?php comment_form();?>
	<!-- array('comment_field' => '<textarea id="comment" name="comment" placeholder="Comentario..." cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea>',
							'submit_field' => '<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit btn btn-primary" value="Publicar comentario"> %2$s</p>',) -->
 
</div><!-- #comments -->