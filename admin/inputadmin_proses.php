<?php ob_start();
include '../koneksi/koneksi.php';

$id_admin       = $_POST['id_admin'];
$nama           = $_POST['nama'];
$user	        = $_POST['user'];
$pass			= $_POST['pass'];
$email          = $_POST['email'];

$query= mysql_query("INSERT INTO admin (id_admin, nama, user, pass, email) VALUES ('$id_admin', '$nama', '$user', '$pass', '$email')") or die (mysql_error());
if ($query) {
echo "<script>alert('Data Berhasil')</script>";
echo "<meta http-equiv='refresh' content='1 url=input_admin.php'>";
}else{
echo "<script>alert('Data Gagal')</script>";
echo "<meta http-equiv='refresh' content='1 url=input_admin.php'>";
}
?>