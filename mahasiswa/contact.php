<?php
include "cekmahasiswa.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Absen Dosen</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
	<link href="css/flexslider.css" rel="stylesheet">
	<link href="css/templatemo-style.css" rel="stylesheet">

</head>
<body>
	<!-- Header -->
	<div class="tm-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
					<a href="#" class="tm-site-name">Absen Dosen</a>	
				</div>
				<div class="col-lg-6 col-md-8 col-sm-9">
					<div class="mobile-menu-icon">
						<i class="fa fa-bars"></i>
					</div>
					<nav class="tm-nav">
						<ul>
							<li><a href="beranda.php">Home</a></li>
							<li><a href="profile.php">Profile</a></li>
							<li><a href="contact.php" class="active">Contact</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</nav>		
				</div>				
			</div>
		</div>	  	
	</div>
	
	<!-- white bg -->
	<section class="section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Contact Us</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				<!-- contact form -->
				<form action="prosescontact.php" method="post" class="tm-contact-form">
					<div class="col-lg-6 col-md-6">
						<div id="google-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.1998580284508!2d106.83067141420594!3d-6.3681765640661565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec0846d18769%3A0x87eb6f64d1a8a3b2!2sUniversitas+Gunadarma+Kampus+D!5e0!3m2!1sid!2sid!4v1513680317675" width="550" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div class="contact-social">
							<a href="#" class="tm-social-icon tm-social-facebook"><i class="fa fa-facebook"></i></a>
				      		<a href="#" class="tm-social-icon tm-social-twitter"><i class="fa fa-twitter"></i></a>
				      		<a href="#" class="tm-social-icon tm-social-instagram"><i class="fa fa-instagram"></i></a>
				      		<a href="#" class="tm-social-icon tm-social-google-plus"><i class="fa fa-google-plus"></i></a>
						</div>
					</div> 
					<div class="col-lg-6 col-md-6 tm-contact-form-input">
						<div class="form-group">
							<input type="text" id="contact_status" class="form-control" name="status" placeholder="STATUS" value="Mahasiswa" readonly />
						</div>
						<div class="form-group">
							<input type="text" id="contact_name" class="form-control" name="name" placeholder="NAME" />
						</div>
						<div class="form-group">
							<input type="email" id="contact_email" class="form-control" name="email" placeholder="EMAIL" />
						</div>
						<div class="form-group">
							<textarea id="contact_message" class="form-control" rows="6" name="message" placeholder="MESSAGE"></textarea>
						</div>
						<div class="form-group">
							<button class="tm-submit-btn" type="submit" name="submit">Kirim</button> 
						</div>               
					</div>
				</form>
			</div>			
		</div>
	</section>
	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">&copy; Universitas Gunadarma All rights reserved.<?php echo date ("Y")?></p>
			</div>
		</div>		
	</footer>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>			<!-- flexslider js -->
	<script type="text/javascript" src="js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
	
</body>
</html>
