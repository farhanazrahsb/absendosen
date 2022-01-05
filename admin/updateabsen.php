<?php
include "cekadmin.php";
include "../koneksi/koneksi.php";
if(isset($_GET['no']))
{
 $sql_query="SELECT * FROM absen WHERE no=".$_GET['no'];
 $result_set=mysql_query($sql_query);
 $row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
$id_dosen       = $_POST['id_dosen'];
$kd_jurus       = $_POST['kd_jurus'];
$kd_kls         = $_POST['kd_kls'];
$kd_matkul      = $_POST['kd_matkul'];
$minggu         = $_POST['minggu'];
$kd_ruang       = $_POST['kd_ruang'];
$ket_absen      = $_POST['ket_absen'];
$pesan          = $_POST['pesan'];
$waktu          = $_POST['waktu'];
 // variables for input data
 
 // sql query for update data into database
 $sql_query = "update absen SET id_dosen='$id_dosen', kd_jurus='$kd_jurus', kd_kls='$kd_kls', kd_matkul='$kd_matkul', minggu='$minggu', ruang='$ruang', ket_absen='$ket_absen', pesan='$pesan', waktu='$waktu' WHERE no=".$_GET['no'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Berhasil Diupdate');
  window.location.href='rekapabsen.php';
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
 header("Location: rekapabsen.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Absen Dosen</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="beranda.php" class="logo">Absen <span class="lite">Dosen</span></a>
            <img src="../img/ug.png" width="60" height="60">
            <!--logo end-->
            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="username"><?php echo $_SESSION['user'] ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="profile.php"><i class="fa fa-bell"></i> PROFILE</a>
                            </li>
                            <li>
                                <a href="logout.php"><i class="fa fa-power-off"></i> LOGOUT</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="beranda.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
          <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Master Data</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="">
                          
                          <li><a class="" href="rekapdosen.php">Dosen</a></li>
                          <li><a class="" href="rekapmahasiswa.php">Mahasiwa</a></li>
                          <li><a class="" href="rekapadmin.php">Admin</a></li>
                          <li><a class="" href="rekapjurusan.php">Jurusan</a></li>
                          <li><a class="" href="rekapkelas.php">Kelas</a></li>
                          <li><a class="" href="rekapmatkul.php">Mata Kuliah</a></li>
                          <li><a class="" href="rekapruang.php">Ruang</a></li>
                          <li><a class="" href="rekapruangan.php">Rekap Ruang</a></li>
                          <li><a class="" href="rekapjadwal.php">Jadwal</a></li>
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Rekap</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="">
                          <li><a class="" href="rekapabsen.php">Kehadiran</a></li>
                          <li><a class="" href="rekapmessage.php">Message</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="icon_document_alt"></i> Update Absen</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="beranda.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Update Absen</li>			  	
					</ol>
				</div>
			</div>
          <div class="container">
          <form action="" method="post">
            <div class="form-group">
            <label class="control-label col-xs-2">ID Dosen</label>
            <div class="col-xs-4">
                <input type="text" name="id_dosen" class="form-control" placeholder="ID Dosen" value="<?php echo $row['id_dosen']; ?>" readonly>
            </div><br><br>
            <div class="form-group">
            <label class="control-label col-xs-2">Kode Jurusan</label>
            <div class="col-xs-4">
                <input type="text" name="kd_jurus" class="form-control" placeholder="Kode Jurusan" value="<?php echo $row['kd_jurus']; ?>" >
            </div><br><br>
            <div class="form-group">
            <label class="control-label col-xs-2">Kode Kelas</label>
            <div class="col-xs-4">
                <input type="text" name="kd_kls" class="form-control" placeholder="Kode Kelas" value="<?php echo $row['kd_kls']; ?>">
            </div><br><br>
            <div class="form-group">
            <label class="control-label col-xs-2">Kode Mata Kuliah</label>
            <div class="col-xs-4">
                <input type="text" name="kd_matkul" class="form-control" placeholder="Kode Mata Kuliah" value="<?php echo $row['kd_matkul']; ?>">
            </div><br><br>
            <div class="form-group">
            <label class="control-label col-xs-2">Minggu</label>
            <div class="col-xs-4">
                <input type="text" name="minggu" class="form-control" placeholder="Minggu" value="<?php echo $row['minggu']; ?>">
            </div><br><br>
             <div class="form-group">
            <label class="control-label col-xs-2">Ruang</label>
            <div class="col-xs-4">
                <input type="text" name="kd_ruang" class="form-control" placeholder="Ruang" value="<?php echo $row['kd_ruang']; ?>">
            </div><br><br>
             <div class="form-group">
            <label class="control-label col-xs-2">Keterangan</label>
            <div class="col-xs-4">
                <input type="text" name="ket_absen" class="form-control" placeholder="Keterangan" value="<?php echo $row['ket_absen']; ?>">
            </div><br><br>
             <div class="form-group">
            <label class="control-label col-xs-2">Pesan</label>
            <div class="col-xs-4">
                <input type="text" name="pesan" class="form-control" placeholder="Pesan" value="<?php echo $row['pesan']; ?>">
            </div><br><br>
             <div class="form-group">
            <label class="control-label col-xs-2">Waktu</label>
            <div class="col-xs-4">
                <input type="text" name="waktu" class="form-control" placeholder="Waktu" value="<?php echo $row['waktu']; ?>">
            </div><br><br>
            <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" name="btn-update" value="Update">
                <input type="submit" class="btn btn-default" name="btn-cancel" value="Cancel">
            </div>
            </div>
        </div>
          </form>   
          </div><!--/.row-->
            
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>

  </body>
</html>
