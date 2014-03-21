
<!-- image post format file	 -->


		<article class="image-post post " id="<?php the_ID(); ?>">

			<div class="post-image">
				<?php the_post_thumbnail(); ?>
			</div>

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<div class="image-entry entry">
				<?php the_content(); ?>
			</div>


		</article> <!-- .post -->
