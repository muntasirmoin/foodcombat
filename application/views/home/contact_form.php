	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Contact/give us a review of the food which one you tested!</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
<!--<div class="map-full"></div>-->
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Contact</h2>
						<p>Feel Free To Contact Us!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form action="<?php echo base_url()?>contact-us" method="post">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" id="name" name="contact_name" placeholder="Your Name" required data-error="Please enter your name">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="email" placeholder="Your Email" id="email" class="form-control" name="contact_email" required data-error="Please enter your email">
									<div class="help-block with-errors"></div>
								</div> 
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" id="name" name="contact_number" placeholder="Your number" required data-error="Please enter your name">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
							<!--<div class="col-md-12">
								<div class="form-group">
									<select class="custom-select d-block form-control" id="guest" required data-error="Please Select Person">
									  <option disabled selected>Please Select Person*</option>
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									  <option value="4">4</option>
									  <option value="5">5</option>
									</select>
									<div class="help-block with-errors"></div>
								</div> 
							</div>-->
							<div class="col-md-12">
								<div class="form-group"> 
									<textarea class="form-control" id="message"  name="contact_message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="submit-button text-center">
									<button class="btn btn-common" id="submit" type="submit">Send Message</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div> 
									<div class="clearfix"></div> 
								</div>
							</div>
						</div>            
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact -->
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 arrow-right">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							01768968938
						</p>
					</div>
				</div>
				<div class="col-md-4 arrow-right">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							foodcombat@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							Hospital Road,Kulaura,Moulvibazar
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->