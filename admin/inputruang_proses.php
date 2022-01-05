<?php ob_start();
include '../koneksi/koneksi.php';

$kd_ruang        = $_POST['kd_ruang'];
$ruang           = $_POST['ruang'];

$query= mysql_query("INSERT INTO ruang (kd_ruang, ruang) VALUES ('$kd_ruang', '$ruang')") or die (mysql_error());
if ($query) {
echo "<script>alert('Data Berhasil')</script>";
echo "<meta http-equiv='refresh' content='1 url=input_ruang.php'>";
}else{
echo "<script>alert('Data Gagal')</script>";
echo "<meta http-equiv='refresh' content='1 url=input_ruang.php'>";
}
?>