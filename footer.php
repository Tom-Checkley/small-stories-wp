	<footer class="footer grid__full-width">
		<div class="row">

			<nav class="footer__nav sm-grid__col--12 md-grid__col--12 lg-grid__col--5">
				<?php    /**
					* Displays a navigation menu
					* @param array $args Arguments
					*/
					$args = array(
						
						'menu' => 'footer-nav',
						'menu_class' => 'footer__nav nav no-bullets',
						'echo' => true
					);
				
					wp_nav_menu( $args ); ?>
			</nav>
			
			<div class="twitter-feed centered sm-grid__col--12 md-grid__col--12 lg-grid__col--5">
		    <a class="twitter-timeline"  href="https://twitter.com/SmallStoriesUK" data-widget-id="534038854739570688">Tweets by @SmallStoriesUK</a>
		    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		  </div>

		  <div class="footer__social--center sm-grid__col--12 md-grid__col--12 lg-grid__col--2">
			  <div class="social no-bullets">
					<a href="https://www.facebook.com/SmallStoriesUK/?ref=br_tf" target="_blank">
						<i class="icon-facebook2"></i>
					</a>
					<a href="https://twitter.com/SmallStoriesUK" target="_blank">
						<i class="icon-twitter2"></i>
					</a>
					<a href="mailto:smallstoriesbristol@gmail.com">
						<i class="icon-mail"></i>
					</a>
				</div>
			</div>
		</div>
	</footer>

</div>
<?php wp_footer(); ?>
</body>
</html>