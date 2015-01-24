<?php
/*
Template Name: Booking
*/
get_header(); ?>

	<div class="main-content">
		<div class="overlap">
			<div class="page-padding">
				<div class="row first-section book-now">
					<div class="small-4 medium-4 large-4 columns">
						<h2>So You'd Like To Visit?</h2>
					</div>
					<div class="small-8 medium-8 large-8 columns">
						<div class="row">
							<div class="small-12 medium-12 large-12 columns">
								<p class="hide-for-small">We don't currently operate an online booking system &mdash; but it's coming soon!  For now though you can download the 2014 Booking Form, or complete the form below with your requirements and we will contact you to discuss and confirm your requirements.</p>
								<p class="show-for-small">We don't currently operate an online booking system &mdash; but it's coming soon!  For now though complete the form below with your details and we will contact you to discuss and confirm your requirements.</p>
								<p class="hide-for-small"><a id="download" href="http://downloads.drewerycaravanpark.co.uk/Drewery-Caravan-Park-2014-Reservation-Form.pdf" download="Reservation Form" class="secondary button radius round"><span data-icon="&#xe003" aria-hidden="true"></span> Download the 2014 Booking Form (.pdf)</a></p>
								<p class="hide-for-small"><span class="radius label">Note</span> You will need to have Adobe<sup>&reg;</sup> Reader<sup>&reg;</sup> installed on your computer to view .pdf documents.  You can download it <a href="http://get.adobe.com/reader/?no_ab=1" target="_blank">here</a>.</p>
							</div>
						</div>
					</div>
				</div><!-- .first-section -->
				<div class="row book-now">
					<div class="small-12 medium-12 large-12 columns">

						<form method="post" action="<?php echo get_template_directory_uri(); ?>/mailer/booking.php" id="booking-form" class="custom hide-for-small">
								<div class="row next-section">
									<div class="small-4 medium-4 large-4 columns">
										<p><strong>Your Name & Address</strong><br>
										We'll need this to write to you.</p>
									</div>
									<div class="small-8 medium-8 large-8 columns">
										<div class="row collapse">
											<div class="small-1 medium-1 large-1 columns">
												<span class="prefix"><span data-icon="&#xe028" aria-hidden="true"></span></span>
											</div>
											<div class="small-11 medium-11 large-11 columns">
												<input name="name" id="name" type="text" placeholder="Your Name" required>
											</div>
										</div>
										<div class="row">
											<div class="small-12 medium-12 large-12 columns">
												<div class="row collapse">
													<div class="small-1 medium-1 large-1 columns">
														<span class="prefix"><span data-icon="&#xf015" aria-hidden="true"></span></span>
													</div>
													<div class="small-11 medium-11 large-11 columns">
														<input id="addr1" name="addr1" type="text" placeholder="Address Line 1" required>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="small-12 medium-12 large-12 columns">
												<div class="row collapse">
													<div class="small-1 medium-1 large-1 columns">
														<span class="prefix"><span data-icon="&#xf015" aria-hidden="true"></span></span>
													</div>
													<div class="small-11 medium-11 large-11 columns">
														<input id="addr2" name="addr2" type="text" placeholder="Address Line 2">
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="small-6 medium-6 large-6 columns">
												<div class="row collapse">
													<div class="small-2 medium-2 large-2 columns">
														<span class="prefix"><span data-icon="&#xf015" aria-hidden="true"></span></span>
													</div>
													<div class="small-10 medium-10 large-10 columns">
														<input id="town" name="town" type="text" placeholder="Town" required>
													</div>
												</div>
											</div>
											<div class="small-6 medium-6 large-6 columns">
												<div class="row collapse">
													<div class="small-2 medium-2 large-2 columns">
														<span class="prefix"><span data-icon="&#xf015" aria-hidden="true"></span></span>
													</div>
													<div class="small-10 medium-10 large-10 columns">
														<input id="postcode" name="postcode" type="text" placeholder="Post Code" required>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row next-section">
									<div class="small-4 medium-4 large-4 columns">
										<p><strong>Your Telephone Numbers</strong><br>
										We may need to call you.</p>
									</div>
									<div class="small-8 medium-8 large-8 columns">
										<div class="row">
											<div class="small-6 medium-6 large-6 columns">
												<div class="row collapse">
													<div class="small-2 medium-2 large-2 columns">
														<span class="prefix"><span data-icon="&#xe004" aria-hidden="true"></span></span>
													</div>
													<div class="small-1- medium-10 large-10 columns">
														<input id="telno" name="telno" type="text" placeholder="Telephone" required>
													</div>
												</div>
											</div>
											<div class="small-6 medium-6 large-6 columns">
												<div class="row collapse">
													<div class="small-2 medium-2 large-2 columns">
														<span class="prefix"><span data-icon="&#xe001" aria-hidden="true"></span></span>
													</div>
													<div class="small-10 medium-10 large-10 columns">
														<input id="mobileno" name="mobileno" type="text" placeholder="Mobile">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row next-section">
									<div class="small-4 medium-4 large-4 columns">
										<p><strong>Your Email Address</strong><br>
										We could email you too.</p>
									</div>
									<div class="small-8 medium-8 large-8 columns">
										<div class="row collapse">
											<div class="small-1 medium-1 large-1 columns">
												<span class="prefix"><span data-icon="&#xe005" aria-hidden="true"></span></span>
											</div>
											<div class="small-11 medium-11 large-11 columns">
												<input id="email" name="email" type="email" placeholder="Email address">
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="small-4 medium-4 large-4 columns">
										<p><strong>Dates of Stay</strong><br>
										When would you like to come?</p>
									</div>
									<div class="small-8 medium-8 large-8 columns">
										<div class="row">
											<div class="small-6 medium-6 large-6 columns">
												<div class="row collapse">
													<div class="small-2 medium-2 large-2 columns">
														<span class="prefix"><span data-icon="&#xe006" aria-hidden="true"></span></span>
													</div>
													<div class="small-10 medium-10 large-10 columns">
														<input id="fromdate" name="fromdate" type="datetime" class="datetime" placeholder="From Date">
													</div>
												</div>
											</div>
											<div class="small-6 medium-6 large-6 columns">
												<div class="row collapse">
													<div class="small-2 medium-2 large-2 columns">
														<span class="prefix"><span data-icon="&#xe006" aria-hidden="true"></span></span>
													</div>
													<div class="small-10 medium-10 large-10 columns">
														<input id="todate" name="todate" type="datetime" class="datetime" placeholder="To Date">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row next-section">
									<div class="small-4 medium-4 large-4 columns">
										<p><strong>How many people in your party?</strong><br>
										Including yourself.</strong>
									</div>
									<div class="small-8 medium-8 large-8 columns">
										<div class="row">
											<div class="small-3 medium-3 large-3 columns">
												<div class="row collapse">
													<div class="small-4 medium-4 large-4 columns">
														<span class="prefix"><span data-icon="&#xe007" aria-hidden="true"></span></span>
													</div>
													<div class="small-8 medium-8 large-8 columns">
														<input type="number" id="nopeople" name="nopeople" placeholder="Number" value="1" min="1" max="10">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row next-section">
									<div class="small-4 medium-4 large-4 columns">
										<p><strong>Type of Reservation</strong></p>
									</div>
									<div class="small-8 medium-8 large-8 columns">
										<div class="row">
											<div class="small-12 medium-12 large-12 columns">
												<div class="row">
													<div class="small-6 medium-6 large-6 columns">
														<label for="tourerleccie"><input name="type" type="radio" id="tourerleccie" value="Tourer w/ Electricity" style="display:none;"><span class="custom radio"></span> Tourer Electric</label>
														<label for="motorhomeleccie"><input name="type" type="radio" id="motorhomeleccie" value="Motorhome w/ Electricity" style="display:none;"><span class="custom radio"></span> Motorhome Electric</label>
														<label for="camperleccie"><input name="type" type="radio" id="camperleccie" value="Camper w/ Electricity" style="display:none;"><span class="custom radio"></span> Camper Electric</label>
														<label for="tentleccie"><input name="type" type="radio" id="tentleccie" value="Tent w/ Electricity" style="display:none;"><span class="custom radio"></span> Tent Electric</label>
													</div>
													<div class="small-6 medium-6 large-6 columns">
														<label for="motorhomenoleccie"><input name="type" type="radio" id="motorhomenoleccie" value="Motorhome w/o Electricity" style="display:none;"><span class="custom radio"></span> Motorhome No Electric</label>
														<label for="campernoleccie"><input name="type" type="radio" id="campernoleccie" value="Camper w/o Electricity" style="display:none;"><span class="custom radio"></span> Camper No Electric</label>
														<label for="tentnoleccie"><input name="type" type="radio" id="tentnoleccie" value="Tent w/o Electricity" style="display:none;"><span class="custom radio"></span> Tent No Electric</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row next-section">
									<div class="small-4 medium-4 large-4 columns">
										<p><strong>Size of Tent, Motorhome, Camper or Tourer</strong><br>
										It's help us plan for your arrival.</p>
									</div>
									<div class="small-8 medium-8 large-8 columns">
										<div class="row">
											<div class="small-4 medium-4 large-4 columns">
												<div class="row collapse">
													<div class="small-2 medium-2 large-2 columns">
														<span class="prefix"><span data-icon="&#xe007" aria-hidden="true"></span></span>
													</div>
													<div class="small-10 medium-10 large-10 columns">
														<input type="number" name="sizeLength" id="sizelength" placeholder="Length" required>
													</div>
												</div>
											</div>
											<div class="small-4 medium-4 large-4 columns">
												<div class="row collapse">
													<div class="small-2 medium-2 large-2 columns">
														<span class="prefix"><span data-icon="&#xe007" aria-hidden="true"></span></span>
													</div>
													<div class="small-10 medium-10 large-10 columns">
														<input type="number" name="sizeWidth" id="sizewidth" placeholder="Width" required>
													</div>
												</div>
											</div>
											<div class="small-4 medium-4 large-4 columns">
												<input type="hidden" name="units" id="units" value="feet">
												<a href="#" class="small success button" id="switch-units">Switch to Meters</a>
											</div>
										</div>
									</div>
								</div>

								<div class="row" id="submit-area">
									<div class="small-12 medium-12 large-12 columns">
										<button type="submit" href="#" class="button">Submit</button>
									</div>
								</div>
									
						</form>

					</div>
					
					<div class="small-12 medium-12 large-12 columns">
					</div>
				</div>
			</div><!-- .page-padding -->
		</div><!-- .overlap -->
	</div><!-- .main-content -->

	<div id="spinner"></div>

<?php get_footer(); ?>
