<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Food Combat Restaurant</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="asset/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="asset/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="asset/css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="asset/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="asset/css/custom.css">

	<link rel="stylesheet" href="<?= base_url('asset/dashboard/css/jquery.dataTables.min.css');?>">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="<?php echo base_url();?>">
					<img src="asset/images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>menu-form">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>order-form">Order</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>reservation-form">Reservation</a></li>
						
						
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>contact-form">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>about-form">About</a></li>
						
					</ul>
				</div>
			</div>
		</nav>
		
	</header>
	<!-- End header -->
	
    <?php
        if(isset($content)){
            echo $content;
        }    
    ?>
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>We value the environment as much as we value food that's why we have a great peaceful environment to have food combat with family and friends. Our specialty is Chinese cuisine.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Hospital Road, Kulaura,Moulvibazar</p>
					<p class="lead"><a href="#">+8801768968938</a></p>
					<p><a href="#"> foodcombat@gmail.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					
					
					<p><span class="text-color">Sat-Fri :</span> 9:AM - 10PM</p>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved.; 2020 <a href="#">Food Combat Restaurant</a> Design By : 
					<a href="#">Muntasir Moin Chowdhury</a></p>
					</div>
				</div>
			</div>
		</div>
		

		
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="asset/js/jquery-3.2.1.min.js"></script>
	<script src="asset/js/popper.min.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="asset/js/jquery.superslides.min.js"></script>
	<script src="asset/js/images-loded.min.js"></script>
	<script src="asset/js/isotope.min.js"></script>
	<script src="asset/js/baguetteBox.min.js"></script>
	<script src="asset/js/form-validator.min.js"></script>
    <script src="asset/js/contact-form-script.js"></script>
    <script src="asset/js/custom.js"></script>
	<script src="asset/js/sweetalert2@10.js"></script>
	<script src="<?= base_url('asset/dashboard/js/jquery.dataTables.min.js')?>"></script>

	<script>
		$(document).ready( function () {
			$('#myTable').DataTable();
		});
	</script>

	<?php
		$msg = $this->session->userdata('msg');
		if($msg){?>
			<script>
				Swal.fire(
					'<?php echo $msg; ?>',
					'',
					'success'
				)
			</script>
		<?php }
		$this->session->unset_userdata('msg');
	?>

	

	
</body>
</html>