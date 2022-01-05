<?php ob_start();
include '../koneksi/koneksi.php';

$npm       		= $_POST['npm'];
$nama           = $_POST['nama'];
$user	        = $_POST['user'];
$pass			= $_POST['pass'];
$email          = $_POST['email'];

$query= mysql_query("INSERT INTO mahasiswa (npm, nama, user, pass, email) VALUES ('$npm', '$nama', '$user', '$pass', '$email')") or die (mysql_error());
if ($query) {
echo "<script>alert('Data Berhasil')</script>";
echo "<meta http-equiv='refresh' content='1 url=input_mahasiswa.php'>";
}else{
echo "<script>alert('Data Gagal')</script>";
echo "<meta http-equiv='refresh' content='1 url=input_mahasiswa.php'>";
}
?>