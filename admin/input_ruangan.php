<?php
include "../koneksi/koneksi.php";
include "cekadmin.php";
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
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="icon_document_alt"></i> Input Ruangan</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="beranda.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Input Ruangan</li>						  	
					</ol>
				</div>
			</div>
          <div class="container">
          <form action="inputruangan_proses.php" method="post">
            <div class="form-group">
            <label class="control-label col-xs-2">Ruang</label>
            <div class="col-xs-4">
                <select name="kd_ruang" class="form-control" placeholder="Ruang">
                  <option selected="selected">-- Pilih Ruang --</option>
                  <?php 
                  include "../koneksi/koneksi.php";
                  
                  $query=mysql_query("select * from ruang order by kd_ruang asc");
                  while($row=mysql_fetch_array($query))
                  {
                  ?>
                  <option value="<?php  echo $row['kd_ruang']; ?>"><?php  echo $row['ruang']; ?></option>
                  <?php 
                  }
                  ?>
                </select>
            </div><br><br>
            <div class="form-group">
            <label class="control-label col-xs-2">Hari</label>
            <div class="col-xs-4">
                <select name="hari" class="selectpicker form-control" data-live-search="true">
            <option value="" selected>-- Hari --</option>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jumat">Jumat</option>
            <option value="Sabtu">Sabtu</option>
            <option value="Minggu">Minggu</option>
                </select>    
            </div><br><br>
            <div class="form-group">
            <label class="control-label col-xs-2">Sesi Awal</label>
            <div class="col-xs-4">
                <select name="sesi_awal" class="selectpicker form-control" data-live-search="true">
            <option value="" selected>-- Sesi Awal --</option>
            <option value="Sesi 1, 07:30-08:30">Sesi 1, 07:30-08:30</option>
            <option value="Sesi 2, 08:30-09:30">Sesi 2, 08:30-09:30</option>
            <option value="Sesi 3, 09:30-10:30">Sesi 3, 09:30-10:30</option>
            <option value="Sesi 4, 10:30-11:30">Sesi 4, 10:30-11:30</option>
            <option value="Sesi 5, 11:30-12:30">Sesi 5, 11:30-12:30</option>
            <option value="Sesi 6, 12:30-13:30">Sesi 6, 12:30-13:30</option>
            <option value="Sesi 7, 13:30-14:30">Sesi 7, 13:30-14:30</option>
            <option value="Sesi 8, 14:30-15:30">Sesi 8, 14:30-15:30</option>
            <option value="Sesi 9, 15:30-16:30">Sesi 9, 15:30-16:30</option>
            <option value="Sesi 10, 16:30-17:30">Sesi 10, 16:30-17:30</option>
            <option value="Sesi 11, 17:30-18:30">Sesi 11, 17:30-18:30</option>
            <option value="Sesi 12, 18:30-19:30">Sesi 12, 18:30-19:30</option>
            <option value="Sesi 13, 19:30-20:30">Sesi 13, 19:30-20:30</option>
            <option value="Sesi 14, 20:30-21:30">Sesi 14, 20:30-21:30</option>
                </select>    
            </div><br><br>
            <div class="form-group">
            <label class="control-label col-xs-2">Sesi Akhir</label>
            <div class="col-xs-4">
                <select name="sesi_akhir" class="selectpicker form-control" data-live-search="true">
            <option value="" selected>-- Sesi Akhir --</option>
            <option value="Sesi 1, 07:30-08:30">Sesi 1, 07:30-08:30</option>
            <option value="Sesi 2, 08:30-09:30">Sesi 2, 08:30-09:30</option>
            <option value="Sesi 3, 09:30-10:30">Sesi 3, 09:30-10:30</option>
            <option value="Sesi 4, 10:30-11:30">Sesi 4, 10:30-11:30</option>
            <option value="Sesi 5, 11:30-12:30">Sesi 5, 11:30-12:30</option>
            <option value="Sesi 6, 12:30-13:30">Sesi 6, 12:30-13:30</option>
            <option value="Sesi 7, 13:30-14:30">Sesi 7, 13:30-14:30</option>
            <option value="Sesi 8, 14:30-15:30">Sesi 8, 14:30-15:30</option>
            <option value="Sesi 9, 15:30-16:30">Sesi 9, 15:30-16:30</option>
            <option value="Sesi 10, 16:30-17:30">Sesi 10, 16:30-17:30</option>
            <option value="Sesi 11, 17:30-18:30">Sesi 11, 17:30-18:30</option>
            <option value="Sesi 12, 18:30-19:30">Sesi 12, 18:30-19:30</option>
            <option value="Sesi 13, 19:30-20:30">Sesi 13, 19:30-20:30</option>
            <option value="Sesi 14, 20:30-21:30">Sesi 14, 20:30-21:30</option>
                </select>    
            </div><br><br>
            <div class="form-group">
            <label class="control-label col-xs-2">Dosen</label>
            <div class="col-xs-4">
                <select name="id_dosen" class="form-control" placeholder="Dosen">
                  <option selected="selected">-- Pilih Dosen --</option>
                  <?php 
                  include "../koneksi/koneksi.php";
                  
                  $query=mysql_query("select * from dosen order by id_dosen asc");
                  while($row=mysql_fetch_array($query))
                  {
                  ?>
                  <option value="<?php  echo $row['id_dosen']; ?>"><?php  echo $row['nama']; ?></option>
                  <?php 
                  }
                  ?>
                </select>
            </div><br><br>
            <div class="form-group">
            <label class="control-label col-xs-2">Kelas</label>
            <div class="col-xs-4">
                <select name="kd_kls" class="form-control" placeholder="Kelas">
                  <option selected="selected">-- Pilih Kelas --</option>
                  <?php 
                  include "../koneksi/koneksi.php";
                  
                  $query=mysql_query("select * from kelas order by kd_kls asc");
                  while($row=mysql_fetch_array($query))
                  {
                  ?>
                  <option value="<?php  echo $row['kd_kls']; ?>"><?php  echo $row['kls']; ?></option>
                  <?php 
                  }
                  ?>
                </select>
            </div><br><br>
            <div class="form-group">
            <label class="control-label col-xs-2">Status</label>
            <div class="col-xs-4">
                <input type="text" name="status" class="form-control" value="Dosen" readonly="readonly">
            </div><br><br>
            <div class="form-group">
            <label class="control-label col-xs-2">Status Ruang</label>
            <div class="col-xs-4">
                <select name="status_ruang" class="selectpicker form-control" data-live-search="true">
            <option value="" selected>-- Status Ruang --</option>
            <option value="Digunakan">Digunakan</option>
            <option value="Tersedia">Tersedia</option>
                </select>    
            </div><br><br>
            <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Kirim">
                <input type="reset" class="btn btn-default" value="Reset">
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
