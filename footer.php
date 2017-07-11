<?php
	$telephone_number = get_field('telephone_number', 'options');
	$email_address = get_field('email_address', 'options');
	$facebook_link = get_field('facebook_link', 'options');
	$twitter_link = get_field('twitter_link', 'options');
	$instagram_link = get_field('instagram_link', 'options');

	$footer_heading = get_field('footer_heading', 'options');
	$footer_intro = get_field('footer_intro', 'options');
?>
		<footer class="footer" role="contentinfo">

		<?php if($footer_heading) : ?>
			<div class="footer__content">
				<div class="row">
					<div class="column column-m-12">
						<h3><?php echo $footer_heading; ?></h3>
						<?php if($footer_intro) : ?><p><?php echo $footer_intro; ?></p><?php endif; ?>
					</div>
				</di>
			</div>
		<?php endif; ?>

			<div class="row">
				<div class="column column-m-12 column-t-4">
					<nav role="navigation">
						<?php bullets_footer_links(); ?>
					</nav>
				</div>
				<div class="column column-m-12 column-t-4">
					<?php if ( $telephone_number ) : ?>
						<a href="tel:<?php echo $telephone_number; ?>">T: <?php echo $telephone_number; ?></a>
					<?php endif; ?>
					<?php if ( $email_address ) : ?>
						<a href="mailto:<?php echo $email_address; ?>">E: <?php echo $email_address; ?></a>
					<?php endif; ?>

					<ul class="social">
						<?php if ( $facebook_link ) : ?>
							<li><a href="<?php echo $facebook_link; ?>">F: <?php echo $facebook_link; ?></a></li>
						<?php endif; ?>		
						<?php if ( $twitter_link ) : ?>
							<li><a href="<?php echo $twitter_link; ?>">F: <?php echo $twitter_link; ?></a></li>
						<?php endif; ?>		
						<?php if ( $instagram_link ) : ?>
							<li><a href="<?php echo $instagram_link; ?>">F: <?php echo $instagram_link; ?></a></li>
						<?php endif; ?>														
					</ul>

				</div>
				<div class="column column-m-12 column-t-4">

					<form class="subscribe">
						<label>Enter your email address
							<input type="email" placeholder="type your email address">
						</label>
					</form>

				</div>
				<div class="column column-m-12">
					<p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>