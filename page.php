<?php get_header(); ?>


<div class="container">
	
	<div class="row">


	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		
		<article class="post" id="<?php the_ID(); ?>">
		
			<h2><?php the_title(); ?></h2>
		
			<div class="entry">
				<?php the_content(); ?>
			</div>
		
		</article> <!-- .post -->

		<?php endwhile; endif; ?>
	
	

	</div>
</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>