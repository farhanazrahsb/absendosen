<?php ob_start();
include '../koneksi/koneksi.php';

$kd_ruang		= $_POST['kd_ruang'];
$hari			= $_POST['hari'];
$sesi_awal		= $_POST['sesi_awal'];
$sesi_akhir		= $_POST['sesi_akhir'];
$id_dosen       = $_POST['id_dosen'];
$kd_kls	        = $_POST['kd_kls'];
$status			= $_POST['status'];
$status_ruang   = $_POST['status_ruang'];

$query= mysql_query("INSERT INTO rekap_ruang (kd_ruang, hari, sesi_awal, sesi_akhir, id_dosen, kd_kls, status, status_ruang) VALUES ('$kd_ruang', '$hari', '$sesi_awal', '$sesi_akhir', '$id_dosen', '$kd_kls', '$status', '$status_ruang')") or die (mysql_error());

if ($query) {
echo "<script>alert('Data Berhasil')</script>";
echo "<meta http-equiv='refresh' content='1 url=input_ruangan.php'>";
}else{
echo "<script>alert('Data Gagal')</script>";
echo "<meta http-equiv='refresh' content='1 url=input_ruangan.php'>";
}
?>