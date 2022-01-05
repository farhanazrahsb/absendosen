<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from kelas where no='$no'";
mysql_query($query);
header("location: rekapkelas.php");
?>