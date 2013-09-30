<?php get_header(); ?>


	<?php while(have_posts()) : the_post(); ?>

	<?php $post_format = get_post_format(); ?>	


	<?php if (has_post_format( $post_format)): ?>
		
		<?php get_template_part( 'single-'.$post_format ); ?>

	<?php else: ?>

		<?php get_template_part('single-standard'); ?>
		
	<?php endif ?>

		<div id="comment-area">
			<?php comments_template(); ?>
		</div>

	<?php endwhile; ?>
	
	

<?php get_sidebar(); ?>

<?php get_footer(); ?>