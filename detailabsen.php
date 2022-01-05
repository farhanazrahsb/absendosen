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
          $no = $_GET['no'];
          $query=mysql_query("select * from jadwal where no='$no'") or die (mysql_error());
          while($row=mysql_fetch_array($query)){
            $jurusan=mysql_fetch_array(mysql_query("SELECT jurus FROM jurusan WHERE kd_jurus='$row[kd_jurus]'"));
            $matkul=mysql_fetch_array(mysql_query("SELECT matkul FROM matkul WHERE kd_matkul='$row[kd_matkul]'"));
            $ruang=mysql_fetch_array(mysql_query("SELECT ruang FROM ruang WHERE kd_ruang='$row[kd_ruang]'"));
          ?>

            <!-- Content -->
            <div class="wrapper">
            <div class="inner">
            <form action="inputabsen.php" method="post">
            <div class="form-group">
            <div class="col-xs-4">
                <input type="text" name="waktu" class="form-control" value="<?php date_default_timezone_set("Asia/Jakarta");echo date("l, d-m-Y / H:i");?>" readonly>
            </div><br>
            <div class="form-group">
            <div class="col-xs-4">
                <input type="text" name="id_dosen" class="form-control" placeholder="ID Dosen" value="<?php echo $row['id_dosen']; ?>" readonly>
            </div><br>
            <div class="form-group">
            <div class="col-xs-4">
                <?php
                include ('koneksi/koneksi.php');

                $user=$_SESSION['user'];
                $query = mysql_query ("SELECT user FROM dosen WHERE user ='$user'");
                while ($var=mysql_fetch_array($query)) {
                ?>
                <input type="text" name="user" id="user" class="form-control" placeholder="ID Dosen" value="<?php echo $var['user']; ?>" readonly>
                <?php
                }
                ?>
            </div><br>
            <div class="form-group">
            <div class="col-xs-4">
                <input type="text" name="kd_jurus" class="form-control" placeholder="Jurusan" value="<?php echo $jurusan['jurus']; ?>" readonly>
            </div><br>
            <div class="form-group">
            <div class="col-xs-4">
                <input type="text" name="kd_kls" class="form-control" placeholder="Kelas" value="<?php echo $row['kd_kls']; ?>" readonly>
            </div><br>
            <div class="form-group">
            <div class="col-xs-4">
                <input type="text" name="kd_matkul" class="form-control" placeholder="Mata Kuliah" value="<?php echo $matkul['matkul']; ?>" readonly>
            </div><br>
            <div class="form-group">
            <div class="col-xs-4">
                <input type="text" name="kd_ruang" class="form-control" placeholder="Ruang" value="<?php echo $ruang['ruang']; ?>" readonly>
            </div><br>
            <select name="minggu">
                <option selected>--Pilih Minggu--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select><br>
            <select name="ket_absen">
                <option selected>--Pilih Keterangan Absen--</option>
                <option value="Hadir">Hadir</option>
                <option value="Tidak Hadir">Tidak Hadir</option>
                <option value="V-Class">V-class</option>
                <option value="Ganti Hari">Ganti Hari</option>
                <option value="X">X</option>
            </select><br>
            <textarea name="pesan" placeholder="Catatan Dosen"></textarea><br>
            <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Kirim">
                <input type="reset" class="btn btn-default" value="Reset">
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