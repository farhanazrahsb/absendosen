<?php ob_start();
include '../koneksi/koneksi.php';

$kd_matkul        = $_POST['kd_matkul'];
$matkul           = $_POST['matkul'];

$query= mysql_query("INSERT INTO matkul (kd_matkul, matkul) VALUES ('$kd_matkul', '$matkul')") or die (mysql_error());
if ($query) {
echo "<script>alert('Data Berhasil')</script>";
echo "<meta http-equiv='refresh' content='1 url=input_matkul.php'>";
}else{
echo "<script>alert('Data Gagal')</script>";
echo "<meta http-equiv='refresh' content='1 url=input_matkul.php'>";
}
?>