<!-- Start All Pages -->
<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Order Food</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start order form -->
	<div class="reservation-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Order Food</h2>
						<p>You can order food from here!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						<form action="<?php echo base_url()?>order-us" method="post">
							<div class="row">
								<div class="col-md-6">
									<h3>Order Food</h3>
									<div class="col-md-12">
										<div class="form-group">
											
											<select class="custom-select d-block form-control" name="order_foodname" id="person" required data-error="Please select Person">
											  <option value="" selected>Select Food*</option>
											  <?php foreach($all_food_list as $row){?>
											  	<option value="<?php echo $row->food_name?>"><?php echo $row->food_name;?></option>
											  <?php } ?>
											  
											</select>
											
											<div class="help-block with-errors"></div>
										</div>                                  
                                    </div>
                                    <div class="col-md-12">
										<div class="form-group">
											<select class="custom-select d-block form-control" name="order_quantity" id="person" required data-error="Please select Person">
											  <option disabled selected>Select Quantity*</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="5">8</option>
											  <option value="6">9</option>
											  <option value="7">10</option>
											</select>
											<div class="help-block with-errors"></div>
										</div> 
									</div>

									<div class="col-md-12">
										<div class="col-md-6" style="padding: 0; float: left">
											<div class="form-group">
												<input type="date" placeholder="Total Price" id="" class="form-control" name="order_date" >
												<div class="help-block with-errors"></div>
											</div> 
										</div>
										<div class="col-md-1" style="padding: 0;float: left">

										</div>
										<div class="col-md-5" style="padding: 0; float: right">
										<div class="form-group">
												<input type="time" placeholder="Total Price" id="" class="form-control" name="order_time" >
												<div class="help-block with-errors"></div>
											</div> 
										</div>
										
									</div>
									<!-- <div class="col-md-6">
										<div class="form-group">
											<input type="text" placeholder="Total Price" id="totalprice" class="form-control" name="order_totalprice" >
											<div class="help-block with-errors"></div>
										</div> 
									</div> -->
									
								</div>
								<div class="col-md-6">
									<h3>Contact Details</h3>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="order_yourname" placeholder="Your Name" required data-error="Please enter your name">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Your Numbar" id="phone" class="form-control" name="order_yournumber" required data-error="Please enter your Numbar">
											<div class="help-block with-errors"></div>
										</div> 
                                    </div>
                                    <div class="col-md-12">
									<div class="form-group">
                                        <input type="text" class="form-control" id="address" name="order_youraddress" placeholder="Your Address" required data-error="Please enter your address">
                                        <div class="help-block with-errors"></div>
                                    </div>  
                                </div>
								</div>
								<div class="col-md-12">
									<div class="submit-button text-center">
										<button class="btn btn-common" id="submit" type="submit">Place Order</button>
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
	</div>
	<!-- End order form -->
	
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