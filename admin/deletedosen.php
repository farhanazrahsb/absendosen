<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from dosen where no='$no'";
mysql_query($query);
header("location: rekapdosen.php");
?>