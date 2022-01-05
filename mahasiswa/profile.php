<?php
include "../koneksi/koneksi.php";
include "cekmahasiswa.php";
if(isset($_GET['no']))
{
 $no = $_GET['no'];
 $sql_query=mysql_query('SELECT * FROM mahasiswa WHERE no="'.$no.'"');
 $row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
$npm	        = $_POST['npm'];
$nama           = $_POST['nama'];
$user           = $_POST['user'];
$pass           = $_POST['pass'];
$email          = $_POST['email'];
 // variables for input data
 
 // sql query for update data into database
 $sql_query = "UPDATE mahasiswa SET npm='$npm', nama='$nama', user='$user', pass='$pass', email='$email' WHERE npm='$npm'";
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Berhasil Diupdate');
  window.location.href='profile.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('Data Gagal Diupdate');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: beranda.php");
}
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
							<li><a href="profile.php" class="active">Profile</a></li>
							<li><a href="contact.php">Contact</a></li>
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
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Profile</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
		  <?php
          $username = $_SESSION['user'];
          $query=mysql_query("select * from mahasiswa where user='".$username."'") or die (mysql_error());
          while($row=mysql_fetch_array($query)){
          ?>
				<!-- contact form -->
				<form action="" method="post" class="tm-contact-form"> 
					<div class="col-lg-6 col-md-6">
						<div id="google-map">
							<img src="img/mahasiswa.png" width="500" height="340" frameborder="0">
						</div>
					</div> 
					<div class="col-lg-6 col-md-6 tm-contact-form-input">
						<div class="form-group">
							<input type="text" id="npm" class="form-control" name="npm" placeholder="NPM" value="<?php echo $row['npm']; ?>" readonly />
						</div>
						<div class="form-group">
							<input type="text" id="name" class="form-control" name="nama" placeholder="NAME" value="<?php echo $row['nama']; ?>" />
						</div>
						<div class="form-group">
							<input type="text" id="user" class="form-control" name="user" placeholder="USERNAME" value="<?php echo $row['user']; ?>" />
						</div>
						<div class="form-group">
							<input type="password" id="pass" class="form-control" name="pass" placeholder="PASSWORD" value="<?php echo $row['pass']; ?>" />
						</div>
						<div class="form-group">
							<input type="text" id="email" class="form-control" name="email" placeholder="EMAIL" value="<?php echo $row['email']; ?>" />
						</div>

						<div class="form-group">
						<button class="tm-submit-btn" type="submit" name="btn-update">Update Profile</button> 
						</div>
						<div class="form-group">
						<button class="tm-submit-btn" type="submit" name="btn-cancel">Cancel</button>               
						</div>
					</div>
				</form>
				<?php }; ?> 
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
