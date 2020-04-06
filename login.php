<!DOCTYPE html>
<html>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="registration.php">Register</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="addLecture.php">Administrator</a></li>
</ul>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/stylelogin.css">

</head>

<div class="bod">
<body>
<div class="container">
 <img src="image/login.png" height="10%" width="10%"/>

<div id="frm" class="container">
	<form action="process.php" method="POST">

	<p>
	<label> Email</label>
	<input type="text" id="email" name="email_address" />
	</p>

	<p>
	<label> Password</label>
	<input type="password" id="password" name="password" />
	</p>

	<p>

	   <input type="submit" id="btn" class="login-btn" value="LOGIN" />

  </p>

  <p>
   <a href="adminlogin.php">Admin-Login</a>
  </p>

	<p>
	Create new Account <a href="registration.php">Register</a>
				</p>

	</form>

</div>

</body>
</div>

<div>
<div>

<footer align="center" class="footer">Powered by ICEP  &copy  </footer>
</div>
</div>
</html>
