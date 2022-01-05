<?php 
include "cekdosen.php";
include "koneksi/koneksi.php"
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
                                <h2>Absensi</h2>
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
            <form action="inputabsen.php" method="post">
            <div class="form-group">
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
			<th>Absen</th>
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
            <td><a href="detailabsen.php?&no=<?php echo $var['no']; ?>"><button type="button">Absen</button></a></td>
            </tr>
            <?php
            $no++;
            }
            ?>
            </tbody>
            </table>
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