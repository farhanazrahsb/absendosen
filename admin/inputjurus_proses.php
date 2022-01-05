<?php ob_start();
include '../koneksi/koneksi.php';

$kd_jurus        = $_POST['kd_jurus'];
$jurus           = $_POST['jurus'];

$query= mysql_query("INSERT INTO jurusan (kd_jurus, jurus) VALUES ('$kd_jurus', '$jurus')") or die (mysql_error());
if ($query) {
echo "<script>alert('Data Berhasil')</script>";
echo "<meta http-equiv='refresh' content='1 url=input_jurusan.php'>";
}else{
echo "<script>alert('Data Gagal')</script>";
echo "<meta http-equiv='refresh' content='1 url=input_jurusan.php'>";
}
?>