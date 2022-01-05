<?php ob_start();
include '../koneksi/koneksi.php';

$id_dosen       = $_POST['id_dosen'];
$nama           = $_POST['nama'];
$user	        = $_POST['user'];
$pass			= $_POST['pass'];
$email          = $_POST['email'];

$query= mysql_query("INSERT INTO dosen (id_dosen, nama, user, pass, email) VALUES ('$id_dosen', '$nama', '$user', '$pass', '$email')") or die (mysql_error());
if ($query) {
echo "<script>alert('Data Berhasil')</script>";
echo "<meta http-equiv='refresh' content='1 url=input_dosen.php'>";
}else{
echo "<script>alert('Data Gagal')</script>";
echo "<meta http-equiv='refresh' content='1 url=input_dosen.php'>";
}
?>