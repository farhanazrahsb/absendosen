<?php
require('../koneksi/koneksi.php');
session_start();
if (isset($_POST['user'])){
$username=$_POST['user'];
$password=$_POST['pass'];
 
// untuk keamanan
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
 
$sql="SELECT * FROM admin WHERE user='$username' and pass='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
 
if($count==1){
	$_SESSION['user'] = $username;
echo "<script>window.location = 'beranda.php';</script>";
}
else {
echo "<script>alert('Login Gagal')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}
}
?>