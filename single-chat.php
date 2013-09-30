
<!-- chat post format file	 -->


		<article class="chat-post post " id="<?php the_ID(); ?>">
	
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
			<div class="chat-entry entry">
				<?php the_content(); ?>
			</div>
			
		
		</article> <!-- .post -->
