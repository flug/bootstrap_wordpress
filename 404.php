<?php get_header(); ?>



		<article class="post">

			<h2><?php exclamation(); ?></h2>
			<p class="404-description">
				<?php exclamation_description(); ?>
			</p>

			<p>Looks like the page you're looking for isn't here anymore. Try browsing the <a href="">categories</a>, <a href="">archives</a>, or using the search box below.</p>

			<?php include(TEMPLATEPATH.'/searhform.php'); ?>

		</article> <!-- .post -->



<?php get_sidebar(); ?>

<?php get_footer(); ?>
