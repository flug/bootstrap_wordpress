
<!-- gallery post format file	 -->


		<article class="gallery-post post " id="<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<div class="post-gallery">
				<?php get_post_gallery(); ?>
			</div>

			<div class="gallery-entry entry">
				<?php the_content(); ?>
			</div>


		</article> <!-- .post -->
