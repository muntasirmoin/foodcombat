<!-- Start All Pages -->
<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Menu List</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Menu -->
	<!-- Start Menu -->
	<div class="container mt-5 mb-5">
		<table class="table table-light" id="myTable">
			<thead class="thead">
				<tr class="table-primary">
					<th scope="col">ID</th>
					<th scope="col">Food Name</th>
					<th scope="col">Price</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($all_food as $row){?>
				<tr>
					
						<th class="table-danger" scope="row"><?php echo $row->food_id ; ?></th>
						<td class="table-warning"><?php echo $row->food_name ; ?></td>
						<td class="table-success"><?php echo $row->food_price ; ?></td>
						
						<!-- <td><a href="" class="btn btn-danger">Delete</a></td>  -->
					
				</tr>
				<?php } ?>
				
			</tbody>
		</table>
	</div>

    <!-- End Menu -->
    <!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<h1 style="color:#098F96">Beef Curri</h1>
						<a class="lightbox" href="asset/images/gallery-img-01.jpg">
							<img class="img-fluid" src="asset/images/gallery-img-01.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<h1 style="color:#098F96">Chicken Fry</h1>
						<a class="lightbox" href="asset/images/gallery-img-02.jpg">
							<img class="img-fluid" src="asset/images/gallery-img-02.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<h1 style="color:#098F96">Egg Rice</h1>
						<a class="lightbox" href="asset/images/gallery-img-03.jpg">
							<img class="img-fluid" src="asset/images/gallery-img-03.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<h1 style="color:#098F96">Prawn Jhal Fry</h1>
						<a class="lightbox" href="asset/images/gallery-img-04.jpg">
							<img class="img-fluid" src="asset/images/gallery-img-04.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<h1 style="color:#098F96">Spring Roll</h1>
						<a class="lightbox" href="asset/images/gallery-img-05.jpg">
							<img class="img-fluid" src="asset/images/gallery-img-05.jpg" alt="Gallery Images">
						</a>
					</div> 
					<div class="col-sm-6 col-md-4 col-lg-4">
						<h1 style="color:#098F96">Chicken Mosalla</h1>
						<a class="lightbox" href="asset/images/gallery-img-06.jpg">
							<img class="img-fluid" src="asset/images/gallery-img-06.jpg" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->

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