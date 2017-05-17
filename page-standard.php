<?php 
/*
* Template Name: Standard Page
*/
 ?>
 <?php get_header(); ?>

<main class="grid padded-box">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- post -->
	<h1><?php the_title(); ?></h1>
	<?php if(has_post_thumbnail()) : ?>
	<div class="img-holder">
		<?php the_post_thumbnail('thumbnail'); ?>
	</div>
<?php endif; ?>
	<?php the_content(); ?>
	<?php endwhile; ?>

	<?php $new_query = new WP_Query('post_type=ticket-link&posts_per_page=1');
				while($new_query->have_posts()) : $new_query->the_post(); ?>

	<a href="<?php the_field('ticket-link') ?>" class="banner__ticket-link btn--cta-blue btn" target="_blank">Buy Tickets</a>

	<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>
</main>

<?php get_footer(); ?>