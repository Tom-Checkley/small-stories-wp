<?php get_header(); ?>

<main class="grid">

	<div class="row padded-box">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- post -->
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
	</div>

	<hr/>

	<div class="row no-bullets">
		<?php if ( have_posts() ) : 

			query_posts('post_type=volunteers&posts_per_page=-1&order=desc' );

		while ( have_posts() ) : the_post(); ?>
		<!-- post -->

			<section class="md-grid__col--6 lg-grid__col--4 volunteer">
				<div>
					<h3><?php the_field('name'); ?></h3>
					<p><?php the_field('role') ?></p>
					<?php if( get_post_meta($post->ID, 'profile_image', true)) : ?>
					<div class="image-holder">
						<img src="<?php the_field('profile_image'); ?>" alt="Profile picture of <?php the_field('name'); ?>">
					</div>
					<?php endif; ?>
					<?php the_content(); ?>
					<ul class="social no-bullets">

						<?php if( get_post_meta($post->ID, 'email_address', true) ) : ?>
						<li>
							<a href="<?php the_field('email_address'); ?>"><i class="icon-mail"></i></a>
						</li>
						<?php endif; ?>

						<?php if( get_post_meta($post->ID, 'website_url', true) ) : ?>
						<li>
							<a href="<?php the_field('website_url'); ?>"><i class="icon-display"></i></a>
						</li>
						<?php endif; ?>

						<?php if( get_post_meta($post->ID, 'twitter_link', true) ) : ?>
						<li>
							<a href="<?php the_field('twitter_link'); ?>"><i class="icon-twitter2"></i></a>
						</li>
						<?php endif; ?>

						<?php if( get_post_meta($post->ID, 'facebook_link', true) ) : ?>
						<li>
							<a href="<?php the_field('facebook_link'); ?>"><i class="icon-facebook2"></i></a>
						</li>
						<?php endif; ?>

					</ul>
				</div>
			</section>

		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>

	</div>

</main>

<?php get_footer(); ?>