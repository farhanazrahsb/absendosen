<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from absen where no='$no'";
$query2 = "DELETE from absen_mhs where no='$no'";
mysql_query($query);
mysql_query($query2);
header("location: rekapabsen.php");
?>