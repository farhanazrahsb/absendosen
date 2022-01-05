<?php
include "cekdosen.php";
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
					<header id="header" class="alt">
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

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<div class="logo"><span class="icon fa-diamond"></span></div>
							<h2><?php echo $_SESSION['user'] ?></h2>
							<center><p>Selamat Datang Di Absensi Dosen Universitas Gunadarma</p></center>
						</div>
					</section>

					<!-- body -->
					<section id="footer">
						<div class="inner">
							  
							<h2 class="major">Kehadiran</h2>
					          <div class="box-body table-responsive">
					          <table id="example1" class="table table-bordered table-striped">
					          <thead>
					            <tr>
					            <td>No</td>
					            <td>Kelas</td>
					            <td>Mata Kuliah</td>
					            <td>Minggu</td>
					            <td>Keterangan</td>
					            </tr>					          
					          </thead>
					          <tbody>
					          <?php
					          include ('koneksi/koneksi.php');

					          $user=$_SESSION['user'];
					          $halaman = 7;
							  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
							  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
							  $result = mysql_query("SELECT * FROM absen_mhs WHERE user ='$_SESSION[user]'");
							  $total = mysql_num_rows($result);
							  $pages = ceil($total/$halaman);            
							  $query = mysql_query ("SELECT * FROM absen_mhs WHERE user ='$_SESSION[user]' ORDER BY kd_kls ASC LIMIT $mulai, $halaman")or die(mysql_error);
							  $start =$mulai+1;
					          $no=1;
					          while ($var=mysql_fetch_array($query)) {
					          	$kls=mysql_fetch_array(mysql_query("SELECT kls FROM kelas WHERE kd_kls='$var[kd_kls]'"));
					            ?>
					            <tr>
					              <td><?php echo $no ?></td>
					              <td><?php echo $kls ['kls']; ?></td>
					              <td><?php echo $var ['kd_matkul']; ?></td>
					              <td><?php echo $var ['minggu']; ?></td>
					              <td><?php echo $var ['ket_absen']; ?></td>
					            </tr>
					            <?php
					            $no++;
					          }
					          ?>
					          </tbody>
					          </table>
					          </div>
							
						</div>
					</section>
					<div class="container">
					<div class="span11" align="center">
						<ul class="pagination">
							<?php for ($i=1; $i<=$pages ; $i++){ ?>
				  			<b><a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?> |</a></b>
				 
				  			<?php } ?>
						</ul>
								  	  
					</div>
					</div>

					<!-- body -->
					<section id="footer">
						<div class="inner">
							  
							<h2 class="major">Jadwal</h2>
					          <div class="box-body table-responsive">
					          <table id="example1" class="table table-bordered table-striped">
					          <thead>
					            <tr>
					            <th>No</th>
					            <th>Mata Kuliah</th>
					            <th>Kelas</th>
					            <th>Hari</th>
					            <th>Sesi Awal</th>
					            <th>Sesi Akhir</th>
					            <th>Ruang</th>
					            </tr>
					          </thead>
					          <tbody>
					          <?php
					          include ('koneksi/koneksi.php');

					          $user=$_SESSION['user'];
					          $query = mysql_query ("SELECT * FROM jadwal WHERE user ='$_SESSION[user]'");
					          $no=1;
					          while ($var=mysql_fetch_array($query)) {
					          	$matkul=mysql_fetch_array(mysql_query("SELECT matkul FROM matkul WHERE kd_matkul='$var[kd_matkul]'"));
					          	$ruang=mysql_fetch_array(mysql_query("SELECT ruang FROM ruang WHERE kd_ruang='$var[kd_ruang]'"));
					            ?>
					            <tr>
					              <td><?php echo $no ?></td>
					              <td><?php echo $matkul ['matkul']; ?></td>
					              <td><?php echo $var ['kd_kls']; ?></td>
					              <td><?php echo $var ['hari']; ?></td>
					              <td><?php echo $var ['sesi_awal']; ?></td>
					              <td><?php echo $var ['sesi_akhir']; ?></td>
					              <td><?php echo $ruang ['ruang']; ?></td>
					            </tr>
					            <?php
					            $no++;
					          }
					          ?>
					          </tbody>
					          </table>
					          </div>
							
						</div>
					</section>

				<!-- Footer -->
					<section id="footer">
						<div class="inner">
	
							<ul class="copyright">
								<li>&copy; Universitas Gunadarma All rights reserved.<?php echo date ("Y")?></li>
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