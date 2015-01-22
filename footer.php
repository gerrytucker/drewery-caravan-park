
	<div class="footer">
		<br>
		<div class="page-padding">
			<div class="row">
				<div class="small-4 medium-4 large-4 columns">
					<p class="footer-headline"><strong>Get In Touch</strong></p>
					<p>We understand you're likely to have more questions than we can possibly answer on our website.</p>
					<div class="contact-footer phone">
						<p>Need to talk?<br>
						<strong>Call us on (01493) 730845</strong></p>
					</div>
					<div class="contact-footer email">
						<p>Can't phone?<br>
						<strong>Email us at <a href="mailto:contact@drewerycaravanpark.co.uk">contact@drewerycaravanpark.co.uk</a></strong></p>
					</div>
				</div>
				<div class="small-4 medium-4 large-4 columns">
					<p class="footer-headline"><strong>Weather Weather Everywhere!</strong></p>
					<p>Let's face it, everyone wonders what the weather is going to do...</p>
					<div class="weather-footer day">
						<p>Press <kbd>W</kbd> anytime to see the current conditions and 5-day forecast.</p>
					</div>
					<div class="weather-footer night">
						<p>Press <kbd>W</kbd> again to hide it.</p>
					</div>
				</div>
				<div class="small-4 medium-4 large-4 columns">
					<p class="footer-headline"><strong>Subscribe to our Newsletter</strong></p>
					<form id="newsletter" name="newsletter" action="newsletter.php" class="custom footer-form" method="post">
						<div class="row collapse">
							<div class="small-10 medium-10 large-10 columns">
								<input id="email" name="email" type="email" placeholder="Your email address..." required>
							</div>
							<div class="small-2 medium-2 large-2 columns">
								<input type="submit" class="button expand postfix" value="Get It">
							</div>
						</div>
					</form>
					<p>Let us keep you up to date by sending you our occasional newsletter.</p>
				</div>
			</div>
		</div>
	</div>

	<?php get_template_part('copyright'); ?>

	<?php get_template_part('weather'); ?>

<?php wp_footer(); ?>
</body>
</html>
