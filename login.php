<!DOCTYPE html>
<html>
<ul>
  <li><a href="Home.php">Home</a></li>
  <li><a href="Register.php">Register</a></li>
  <li><a href="Login.php">Login</a></li>
  <li><a href="search_delete.php">Administrator</a></li>
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
	<label> Username</label>
	<input type="text" id="username" name="username" />
	</p>
	
	<p>
	<label> Password</label>
	<input type="password" id="password" name="password" />
	</p>
	
	<p>
	<input type="submit" id="btn" class="btn" value="LOGIN" />
	</p>

	<p>
	Create new Account <a href="register.php">Register</a>
				</p>

	</form>
	
</div>

</body>
</div>

<div>
<div>

<footer align="center" class="footer"> &copy ICEP </footer>
</div>
</div>
</html>
