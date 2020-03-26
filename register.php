<?php include('server.php');?>
<!DOCTYPE html>
<html>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="registration.php">Register</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="search_delete.php">Administrator</a></li>
</ul>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/stylereg.css">
</head>

<body>
	<div class="header">
	<h2>Register</h2>
	</div>

		<form method="POST" action="register.php">
		<!-- display validation errors here-->
		<?php include('errors.php') ?>
				<div class="input-group">
					<label>Username</label>
					<input type="text" name="username">
				</div>
				<div class="input-group">
					<label>Email</label>
					<input type="text" name="email">
				</div>
				<div class="input-group">
					<label>Password</label>
					<input type="password" name="password_1">
				</div>
				<div class="input-group">
					<label>Confirm Password</label>
					<input type="password" name="password_2">
				</div>
				<br>
				<div class="center">
					<button type="submit" name="register" class="btn">REGISTER</button>
				</div>
				<br>
				<div>
				<p class="center">
				Already a member<a href="login.php" > LOGIN</a>
				</p>
				</div>

			</form>

</body>
<div>
<div>

<footer align="center" class="footer"> &copy ICEP </footer>
</div>
</div>

</html>
