<?php 

	/**
	* Template Name: Home
	*/

 ?>


<?php get_header(); ?>

<main class="grid">
	<div class="row">
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
			<a href="./events/" class="btn">Event Details</a>
		</article>
	</div>
	<hr/>
	<ul class="row padded-box">
		<?php if ( have_posts() ) : 

			query_posts('post_type=home-contact-blocks&posts_per_page=-1' );

		while ( have_posts() ) : the_post(); ?>
		<!-- post -->

			<li class="sm-grid__col--12 sm-offset__col--0 lg-grid__col--8 lg-offset__col--2 x-lg-grid__col--6 x-lg-offset__col--0 padding-box--thin dropdown contact-block">
				<button class="contact-block__btn btn closed"><h2><img src="<?php the_field('icon') ?>"><?php the_field('group_name'); ?></h2></button>
				<div class="hidden contact-block__dropdown">
					<p><?php the_field('content'); ?></p>
					<a href="<?php the_field('link'); ?>" class="btn btn--wide">Get In Touch</a>
					<hr/>
				</div>

			</li>

		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>

	</ul>

</main>
<?php get_footer(); ?>