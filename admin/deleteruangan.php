<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from rekap_ruang where no='$no'";
mysql_query($query);
header("location: rekapruangan.php");
?>