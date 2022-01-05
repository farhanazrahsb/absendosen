<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from jadwal where no='$no'";
mysql_query($query);
header("location: rekapjadwal.php");
?>