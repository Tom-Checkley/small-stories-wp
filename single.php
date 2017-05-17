<?php get_header(); ?>

<div class="grid">
	
	<div class="row">
		
		<div class="md-grid__col--8">
			
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<!-- post -->
			<h2><?php the_title(); ?></h2>
			<h3>By: <?php the_author(); ?></h3>
			<small>Posted on <?php the_date(); ?></small>

			<?php the_content(); ?>

			<?php comments_template(); ?>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>

		</div>
		<div class="md-grid__col--4">
			<?php get_sidebar(); ?>
		</div>
	</div>

</div>



<?php get_footer(); ?>