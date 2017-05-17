<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<title><?php wp_title(); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="header grid__full-width">
		<div class="row">
			<div class="header__top">
				<?php $new_query = new WP_Query('post_type=site-logo&posts_per_page=1'); 
					while($new_query->have_posts()) : $new_query->the_post();
				?>

				<div class="header__logo">
					<a href="./home/">
						<img src="<?php the_field('site_logo') ?>">
					</a>
				</div>

				<?php endwhile; ?>
			
				<?php wp_reset_postdata(); ?>

				<i class="icon-menu header__menu-btn"></i>

				<nav class="header__nav">
					<?php    /**
						* Displays a navigation menu
						* @param array $args Arguments
						*/
						$args = array(
							
							'menu' => 'main-nav',
							'menu_class' => 'header__nav-links no-bullets',
							'container' => 'div',
							'container_class' => 'nav-links--hidden-showing',
							'echo' => true
						);
					
						wp_nav_menu( $args ); ?>
				</nav>
			</div>
		</div>

	</header>

	<div class="wrapper">
	<div class="banner__container">
			<div class="banner">
				<?php if(has_header_image()) : ?>
				<img src="<?php header_image(); ?>" alt="Banner Image"/>
				<?php endif; ?>
				
				<?php wp_reset_postdata(); ?>
				<div class="banner-bottom"></div>
			</div>

			<?php $new_query = new WP_Query('post_type=ticket-link&posts_per_page=1');
						while($new_query->have_posts()) : $new_query->the_post(); ?>

			<a href="<?php the_field('ticket-link') ?>" class="banner__ticket-link btn--cta btn" target="_blank">Buy Tickets</a>

			<?php endwhile; ?>

			<?php wp_reset_postdata(); ?>
		</div>





