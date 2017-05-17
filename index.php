<?php 

	/**
	* Template Name: Blog
	*/

 ?>


<?php get_header(); ?>
<div class="grid">
	
	<ul class="row md-grid__col--8" >
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- post -->

			<li class="md-grid__col--6">
				<h3><?php the_title(); ?></h3>
				<div class="thumbnail"><?php get_the_post_thumbnail('thumbnail'); ?></div>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>">Read More</a>
			</li>

		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>

	</ul>

	<aside class="md-grid__col--4">
		<?php get_sidebar(); ?>
	</aside>
</div>
<?php get_footer(); ?>