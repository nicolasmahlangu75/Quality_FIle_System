<!DOCTYPE html>
<html>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="registration.php">Register</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="adminlogin.php">Administrator Login</a></li>
</ul>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/styleslogin.css">

</head>

<div class="bod">
<body>
<div class="container">


<div id="frm" class="container">
	<form action="adminlogin_process.php" method="POST">
	<h1 ">Login</h1><br>

	<br>
	<p>
	<label> Email </label> 
	
	<input type="text" id="email" name="email_address" />
	<hr>
	</p>
	

<br>
	<p>
	<label> Password</label>
	
	<input type="password" id="password" name="password" />
	<hr>
	</p>

	<p>
	<input type="submit" id="btn" class="login-btn" value="LOGIN" />
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
