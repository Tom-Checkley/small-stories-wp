<?php get_header(); ?>

<main class="grid">

	<article class="padded-box">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- post -->
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>

		<?php $new_query = new WP_Query('post_type=ticket-link&posts_per_page=1');
					while($new_query->have_posts()) : $new_query->the_post(); ?>

		<a href="<?php the_field('ticket-link') ?>" class="btn--cta-blue btn" target="_blank">Buy Tickets</a>

		<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>
	</article>

	<hr/>

	<?php $new_query = new WP_Query('post_type=performers&posts_per_page=-1&order=desc'); 
		while($new_query->have_posts()) : $new_query->the_post();
	?>

	<!-- post -->
	<section class="performer padded-box">
		
		<h1 class="performer__name"><?php the_field('performers_name') ?></h1>
		<!-- <div class="row"> -->
		<?php if( get_post_meta($post->ID, 'performers_profile_picture', true) ) : ?>
		<div class="performer__img">
			<img src="<?php the_field('performers_profile_picture') ?>" alt="Profile picture of <?php the_field('performers_name') ?>">
		</div>
		<?php endif; ?>

		<article class="performer__bio">
			<?php the_field('performers_bio') ?>
		</article>
		<ul class="social no-bullets">
			<?php if( get_post_meta($post->ID, 'performers_website', true) ) : ?>
			<li>
				<a href="<?php the_field('performers_website'); ?>"><i class="icon-display"></i></a>
			</li>
			<?php endif; ?>

			<?php if( get_post_meta($post->ID, 'performers_twitter_url', true) ) : ?>
			<li>
				<a href="<?php the_field('performers_twitter_url'); ?>"><i class="icon-twitter2"></i></a>
			</li>
			<?php endif; ?>

			<?php if( get_post_meta($post->ID, 'performers_facebook_url', true) ) : ?>
			<li>
				<a href="<?php the_field('performers_facebook_url'); ?>"><i class="icon-facebook2"></i></a>
			</li>
			<?php endif; ?>
		</ul>

		
	</section>

	<hr/>

	<?php endwhile; ?>

		
	<?php $new_query = new WP_Query('post_type=ticket-link&posts_per_page=1');
				while($new_query->have_posts()) : $new_query->the_post(); ?>

	<a href="<?php the_field('ticket-link') ?>" class="banner__ticket-link btn--cta-blue btn" target="_blank">Buy Tickets</a>

	<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>


</main>


<?php get_footer(); ?>