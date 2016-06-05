
		<footer class="footer-distributed">
			<div class="footer-left">
				<h4><?php bloginfo( 'name' ); ?></h4>
				<p class="footer-links">
					<?php wp_nav_menu(array('theme_location'=>'secondary')); ?>
				</p>

				<p class="footer-company-name"><?php _e('2016. All Rights Reserved. Themes by: eclarinalviel','mytheme_setup');?></p>
			</div>
			<div class="footer-center">
				<div>
					<?php $address = get_option('address');
						$contact = get_option('contact');
						$email = get_option('email');
					?>
					<i class="glyphicon glyphicon-home"></i>
					<p><?php echo $address; ?></p>
				</div>

				<div>
					<i class="glyphicon glyphicon-phone"></i>
					<p><?php echo $contact; ?></p>
				</div>

				<div>
					<i class="glyphicon glyphicon-envelope"></i>
					<p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
				</div>

			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>Follow me on:</span>
					
				</p>
				<div class="footer-icons">
					<?php $facebook_url = get_option('facebook_url');
						$twitter_url = get_option('twitter_url'); ?>
						<a href="<?php echo $twitter_url; ?>" class="btn btn-info"><?php _e('Twitter','mytheme_setup') ?></a>
						<a href="<?php echo $facebook_url; ?>" class="btn btn-fb"><?php _e('Facebook','mytheme_setup') ?></a>
					<?php wp_footer(); ?>
				</div>

			</div>

		</footer>

	</body>
</html>
