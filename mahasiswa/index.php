<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="background-wrap">
  <div class="background"></div>
</div>

<form id="accesspanel" action="login_proses.php" method="post">
  <h1 id="litheader">Mahasiswa</h1>
  <div class="inset">
    <p>
      <input type="text" name="user" id="username" placeholder="Username" autofocus="autofocus">
    </p>
    <p>
      <input type="password" name="pass" id="password" placeholder="Password">
    </p>
    <input class="loginLoginValue" type="hidden" name="service" value="login" />
  </div>
  <p class="p-container">
    <input type="submit" name="Login" id="go" value="Login">
  </p>
</form>

<script src="design.js"></script>
</body>
</html>