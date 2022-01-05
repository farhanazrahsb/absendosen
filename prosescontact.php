<?php ob_start();
include 'koneksi/koneksi.php';

$status         = $_POST['status'];
$name           = $_POST['name'];
$email          = $_POST['email'];
$message        = $_POST['message'];

$query= mysql_query("INSERT INTO message (status, name, email, message) VALUES ('$status', '$name', '$email', '$message')") or die (mysql_error());
if ($query) {
echo "<script>alert('Data Berhasil')</script>";
echo "<meta http-equiv='refresh' content='1 url=beranda.php'>";
}else{
echo "<script>alert('Data Gagal')</script>";
echo "<meta http-equiv='refresh' content='1 url=beranda.php'>";
}
?>