<?php ob_start();
include '../koneksi/koneksi.php';

$kd_jurus	   = $_POST['kd_jurus'];
$kd_kls        = $_POST['kd_kls'];
$kls           = $_POST['kls'];

$query= mysql_query("INSERT INTO kelas (kd_jurus,kd_kls, kls) VALUES ('$kd_jurus', '$kd_kls', '$kls')") or die (mysql_error());
if ($query) {
echo "<script>alert('Data Berhasil')</script>";
echo "<meta http-equiv='refresh' content='1 url=input_kelas.php'>";
}else{
echo "<script>alert('Data Gagal')</script>";
echo "<meta http-equiv='refresh' content='1 url=input_kelas.php'>";
}
?>