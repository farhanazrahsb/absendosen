<?php
include "koneksi/koneksi.php";
include "cekdosen.php";
if(isset($_GET['no']))
{
 $no = $_GET['no'];
 $sql_query=mysql_query('SELECT * FROM dosen WHERE no="'.$no.'"');
 $row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
$id_dosen       = $_POST['id_dosen'];
$nama           = $_POST['nama'];
$user           = $_POST['user'];
$pass           = $_POST['pass'];
$email          = $_POST['email'];
 // variables for input data
 
 // sql query for update data into database
 $sql_query = "UPDATE dosen SET id_dosen='$id_dosen', nama='$nama', user='$user', pass='$pass', email='$email' WHERE id_dosen='$id_dosen'";
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Berhasil Diupdate');
  window.location.href='beranda.php';
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
<!DOCTYPE HTML>
<html>
	<head>
		<title>Absen Dosen</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="beranda.php">Absen Dosen</a></h1>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="beranda.php">Home</a></li>
								<li><a href="absen.php">Absensi</a></li>
								<li><a href="profile.php">Profile</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

				<!-- Wrapper -->
					<section id="wrapper">
						<header>
							<div class="inner">
								<h2>Profile</h2>
							</div>
						</header>

		  <?php
          $username = $_SESSION['user'];
          $query=mysql_query("select * from dosen where user='".$username."'") or die (mysql_error());
          while($row=mysql_fetch_array($query)){
          ?>

			<!-- Content -->
			<div class="wrapper">
			<div class="inner">
			<form action="" method="post">
            <div class="form-group">
            <div class="col-xs-4">
                <input type="text" name="id_dosen" class="form-control" placeholder="ID Dosen" value="<?php echo $row['id_dosen']; ?>" readonly>
            </div><br>
            <div class="form-group">
            <div class="col-xs-4">
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $row['nama']; ?>" readonly>
            </div><br>
            <div class="form-group">
            <div class="col-xs-4">
                <input type="text" name="user" class="form-control" placeholder="Username" value="<?php echo $row['user']; ?>">
            </div><br>
            <div class="form-group">
            <div class="col-xs-4">
                <input type="password" name="pass" class="form-control" placeholder="Password" value="<?php echo $row['pass']; ?>">
            </div><br>
            <div class="form-group">
            <div class="col-xs-4">
                <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $row['email']; ?>">
            </div><br>
            <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" name="btn-update" value="Update Profile">
                <input type="submit" class="btn btn-primary" name="btn-cancel" value="Cancel">
            </div>
        </div>
          </form>  	
			</div>
			</div>
			<?php }; ?> 

			</section>

				<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<ul class="copyright">
								<li>&copy; Universitas Gunadarma. All rights reserved<?php echo date ("Y")?></li>
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>