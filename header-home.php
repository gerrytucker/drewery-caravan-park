	<div class="page-placeholder">

		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
			
<?php if ($_SESSION["signed_up"] == "ok") : ?>
				<div class="alert-box success">
					Thanks, you're all signed up!
					<a href="" class="close">&times;</a>
				</div>
<?php $_SESSION["signed_up"] = ""; endif; ?>

<?php if ($_SESSION["booked_up"] == "ok") : ?>
				<div class="alert-box success">
					Thanks, we've received your request.  We'll get back to you shortly.
					<a href="" class="close">&times;</a>
				</div>
<?php $_SESSION["booked_up"] = ""; endif; ?>

				<div class="page-copy">
					<h1 class="extra-bold super"><span class="highlight-pink first-line">Drewery</span></h1>
					<h1 class="extra-bold super last-line"><span class="highlight-pink second-line">Caravan Park</span></h1>
					<div class="show-for-large-up">
						<div class="line-height first-line">
							<span class="desktop-highlight">
							Welcome to our family-run, family-friendly caravan and camping
							</span>
						</div>
						<div class="line-height">
							<span class="desktop-highlight">
							park. Take some time to browse our website and when you're
							</span>
						</div>
						<div class="line-height last-line">
							<span class="desktop-highlight">
							ready, book a stay with us. We'd love to see you.
							</span>
						</div>
					</div>
					<div class="hide-for-large-up">
						<p class="subheader">Welcome to our family-run, family-friendly caravan and camping park. Take some time to browse our website and when you're ready, book a stay with us. We'd love to see you.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

