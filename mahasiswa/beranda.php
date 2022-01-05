<?php
include "../koneksi/koneksi.php";
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
  <body class="tm-gray-bg">
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
							<li><a href="beranda.php" class="active">Home</a></li>
							<li><a href="profile.php">Profile</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</nav>		
	  			</div>				
  			</div>
  		</div>	  	
  	</div>
	
	<!-- Banner -->
	<section class="tm-banner">
		<!-- Flexslider -->
		<div class="flexslider flexslider-banner">
		  <ul class="slides">
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Welcome <span class="tm-yellow-text"><?php echo $_SESSION['user'] ?></span></h1>
					<p class="tm-banner-subtitle">Di Absensi Dosen Universitas Gunadarma</p>
				</div>
				<img src="img/banner.jpg" alt="Image" />	
		    </li>
		    
		  </ul>
		</div>	
	</section>

	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
		<div class="section-margin-top">
			<div class="row">				
				<div class="tm-section-header">
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">Daftar Dosen</h2></div>
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
				</div>
			</div>
			<div class="row">
			<?php
			  $halaman = 4;
			  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
			  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
			  $result = mysql_query("SELECT * FROM absen_mhs");
			  $total = mysql_num_rows($result);
			  $pages = ceil($total/$halaman);            
			  $query = mysql_query("select * from absen_mhs order by waktu desc LIMIT $mulai, $halaman")or die(mysql_error);
			  $no =$mulai+1;
			 
			 
			  while ($rows = mysql_fetch_assoc($query)) {
			  	$nama=mysql_fetch_array(mysql_query("SELECT nama FROM dosen WHERE id_dosen='$rows[id_dosen]'"));
			?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-home-box-2">						
						<img src="img/dosen.jpg" alt="image" class="img-responsive">
						<p class="tm-date"><?php echo $rows['waktu'];?></p>
						<h3>
						<label>Nama</label><br>
						<input type="text" name="nama" class="form-control" value="<?php echo $nama['nama'];?>" readonly><br>
						<label>Jurusan</label><br>
						<input type="text" name="kd_jurus" class="form-control" value="<?php echo $rows['kd_jurus'];?>" readonly><br>
						<label>Kelas</label><br>
						<input type="text" name="kd_kls" class="form-control" value="<?php echo $rows['kd_kls'];?>" readonly><br>
						<label>Mata Kuliah</label><br>
						<input type="text" name="kd_matkul" class="form-control" value="<?php echo $rows['kd_matkul'];?>" readonly><br>
						<label>Minggu</label><br>
						<input type="text" name="minggu" class="form-control" value="<?php echo $rows['minggu'];?>" readonly><br>
						<label>Ruang</label><br>
						<input type="text" name="kd_ruang" class="form-control" value="<?php echo $rows['kd_ruang'];?>" readonly><br>
						<label>Keterangan</label><br>
						<input type="text" name="ket_absen" class="form-control" value="<?php echo $rows['ket_absen'];?>" readonly><br>
						<label>Pesan</label><br>
						<textarea class="form-control" readonly><?php echo $rows['pesan'];?></textarea>
						</h3>
					</div>
				</div>
				<?php
				}
				?>
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
	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">&copy; Universitas Gunadarma All rights reserved.<?php echo date ("Y")?></p>
			</div>
		</div>		
	</footer>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
  	<script type="text/javascript" src="js/moment.js"></script>							<!-- moment.js -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
	<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>	<!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<!--
	<script src="js/froogaloop.js"></script>
	<script src="js/jquery.fitvid.js"></script>
-->
   	<script type="text/javascript" src="js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
	<script>
		// HTML document is loaded. DOM is ready.
		$(function() {

			$('#hotelCarTabs a').click(function (e) {
			  e.preventDefault()
			  $(this).tab('show')
			})

        	$('.date').datetimepicker({
            	format: 'MM/DD/YYYY'
            });
            $('.date-time').datetimepicker();

			// https://css-tricks.com/snippets/jquery/smooth-scrolling/
		  	$('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
		  	});
		});
		
		// Load Flexslider when everything is loaded.
		$(window).load(function() {	  		
			// Vimeo API nonsense

/*
			  var player = document.getElementById('player_1');
			  $f(player).addEvent('ready', ready);
			 
			  function addEvent(element, eventName, callback) {
			    if (element.addEventListener) {
			      element.addEventListener(eventName, callback, false)
			    } else {
			      element.attachEvent(eventName, callback, false);
			    }
			  }
			 
			  function ready(player_id) {
			    var froogaloop = $f(player_id);
			    froogaloop.addEvent('play', function(data) {
			      $('.flexslider').flexslider("pause");
			    });
			    froogaloop.addEvent('pause', function(data) {
			      $('.flexslider').flexslider("play");
			    });
			  }
*/

			 
			 
			  // Call fitVid before FlexSlider initializes, so the proper initial height can be retrieved.
/*

			  $(".flexslider")
			    .fitVids()
			    .flexslider({
			      animation: "slide",
			      useCSS: false,
			      animationLoop: false,
			      smoothHeight: true,
			      controlNav: false,
			      before: function(slider){
			        $f(player).api('pause');
			      }
			  });
*/


			  

//	For images only
		    $('.flexslider').flexslider({
			    controlNav: false
		    });


	  	});
	</script>
 </body>
 </html>