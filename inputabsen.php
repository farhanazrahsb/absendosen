<?php ob_start();
include 'koneksi/koneksi.php';

$waktu          = $_POST['waktu'];
$id_dosen       = $_POST['id_dosen'];
$user			= $_POST['user'];
$kd_jurus		= $_POST['kd_jurus'];
$kd_kls         = $_POST['kd_kls'];
$kd_matkul      = $_POST['kd_matkul'];
$minggu			= $_POST['minggu'];
$kd_ruang       = $_POST['kd_ruang'];
$ket_absen      = $_POST['ket_absen'];
$pesan          = $_POST['pesan'];

$query= mysql_query("INSERT INTO absen (waktu, id_dosen, user, kd_jurus, kd_kls, kd_matkul, minggu, kd_ruang, ket_absen, pesan) VALUES ('$waktu', '$id_dosen', '$user', '$kd_jurus', '$kd_kls ', '$kd_matkul', '$minggu', '$kd_ruang', '$ket_absen', '$pesan')") or die (mysql_error());

$query2= mysql_query("INSERT INTO absen_mhs (waktu, id_dosen, user, kd_jurus, kd_kls, kd_matkul, minggu, kd_ruang) VALUES ('$waktu', '$id_dosen', '$user', '$kd_jurus', '$kd_kls ', '$kd_matkul', '$minggu', '$kd_ruang')") or die(mysql_error());

if ($query) {
echo "<script>alert('Data Berhasil')</script>";
echo "<meta http-equiv='refresh' content='1 url=beranda.php'>";
}else{
echo "<script>alert('Data Gagal')</script>";
echo "<meta http-equiv='refresh' content='1 url=absen.php'>";
}
?>