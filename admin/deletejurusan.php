<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from jurusan where no='$no'";
mysql_query($query);
header("location: rekapjurusan.php");
?>