<?php get_header(); ?>

<div class="grid">
	
	<div class="row">
		
		<div class="md-grid__col--8">
			
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<!-- post -->
			<div <?php post_class(); ?>>
				<h3><?php the_title(); ?></h3>
				<?php the_content(); ?>
				<?php wp_link_pages(); ?>
			</div>
			<button><?php previous_posts_link(); ?></button>
			<button><?php next_posts_link(); ?></button>
			<div class="tags">
				<?php the_tags();  ?>
			</div>
			<div class="comment-form"><?php comment_form(); ?></div>
			<div class="comments">
				<?php wp_list_comments(); ?>
				<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
				<div>
					<button><?php previous_comments_link() ?></button>
					<button><?php next_comments_link() ?></button>
				</div>
			</div>
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