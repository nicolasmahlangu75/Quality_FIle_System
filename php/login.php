<?php
include 'connection.php';
include 'login.php';
$error = '';

if(isset($_POST["submit"]))
{

        // validate username empty
        if(isset($_POST['email_address']) && empty($_POST['email_address']))
        {

            $error .= "<div class='alert alert-danger text-center' role='alert'>Email address entered is invalid, please try again.</div>";

        }
        else
        {

            // validate
            if(!preg_match("/^[a-zA-Z ]*$/", $_POST['email_address']))
            {
            $error  .= "<div class='alert alert-success text-center' role='alert'>Name is valid.</div>";
            }
        }
           // validate password empty
           if(isset($_POST['password']) && empty($_POST['password']))
           {
               $error .= "<div class='alert alert-danger text-center' role='alert'>Password is invalid, please try again.</div>";
           }
           else
           {
               // validate
               if(!preg_match("/^[a-zA-Z ]*$/", $_POST['password']))
               {

                 $error  .= "<div class='alert alert-success text-center' role='alert'>'Password is valid.</div>";

               }

           }

}

 $email_address = $_POST["email_address"];
 $password = $_POST["password"];

 if(trim($email_address)!=""and trim($password)!= "")
 {

     //Sanitizes whatever is entered
     $email_address=stripcslashes($email_address);
     $password=stripcslashes($password);
     $email_address=strip_tags($_POST["email_address"]);
     $password=strip_tags($_POST["password"]);

     $email_address= mysqli_real_escape_string($conn,$email_address);
     $password= mysqli_real_escape_string($conn,$password);

     //SQL Query
     $query = mysqli_query($conn,"SELECT * FROM users WHERE email_address ='$email_address' AND password ='$password'");
     //apply mysqli
     $numrows= mysqli_num_rows($query);

     if($numrows >0)
     {

          //session email_address
         $_SESSION["email_address"]= $email_address;

              echo "Login successful";
              header('location: files-sql/index.php');

        }
        else
        {

              echo "Failed to login! Check if your password and email_address are valid";

        }

   }

?>

<!DOCTYPE html>
<html>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="registration.php">Register</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="search_delete.php">Administrator</a></li>
</ul>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/styleslogin.css">

</head>

<div class="bod">
<body>
<div class="container">
 <img src="images/login.png" height="10%" width="10%"/>

<div id="frm" class="container" >
	<form method="POST" action="login.php">

	<p>
	<label> Email</label>
	<input type="text" id="email_address" name="email_address" />
	</p>

	<p>
	<label> Password</label>
	<input type="password" id="password" name="password" />
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
