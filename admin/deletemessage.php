<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from message where no='$no'";
mysql_query($query);
header("location: rekapmessage.php");
?>