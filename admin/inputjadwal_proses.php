<?php ob_start();
include '../koneksi/koneksi.php';

$id_dosen       = $_POST['id_dosen'];
$user			= $_POST['user'];
$kd_matkul      = $_POST['kd_matkul'];
$kd_jurus		= $_POST['kd_jurus'];
$kd_kls	        = $_POST['kd_kls'];
$hari			= $_POST['hari'];
$sesi_awal		= $_POST['sesi_awal'];
$sesi_akhir		= $_POST['sesi_akhir'];
$kd_ruang		= $_POST['kd_ruang'];
$status         = $_POST['status'];
$status_ruang   = $_POST['status_ruang'];

$query= mysql_query("INSERT INTO jadwal (id_dosen, user, kd_matkul, kd_jurus, kd_kls, hari, sesi_awal, sesi_akhir, kd_ruang) VALUES ('$id_dosen', '$user', '$kd_matkul', '$kd_jurus', '$kd_kls', '$hari', '$sesi_awal', '$sesi_akhir', '$kd_ruang')") or die (mysql_error());

$query2= mysql_query("INSERT INTO rekap_ruang (kd_ruang, hari, sesi_awal, sesi_akhir, id_dosen, kd_kls, status, status_ruang) VALUES ('$kd_ruang', '$hari', '$sesi_awal', '$sesi_akhir', '$id_dosen', '$kd_kls', '$status', '$status_ruang')") or die (mysql_error());

if ($query) {
echo "<script>alert('Data Berhasil')</script>";
echo "<meta http-equiv='refresh' content='1 url=input_jadwal.php'>";
}else{
echo "<script>alert('Data Gagal')</script>";
echo "<meta http-equiv='refresh' content='1 url=input_jadwal.php'>";
}
?>