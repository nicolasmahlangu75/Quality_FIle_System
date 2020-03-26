 <?php
 $username = "";
 $email = "";
 $errors = array();
 //connect to the daytabase

 $db = mysqli_connect('localhost','root','','new_file_database') or die($db);

 //when the register button is clicked
 if(isset($_POST['register'])){
	 $username = mysqli_real_escape_string($db, $_POST['username']);
	 $email = mysqli_real_escape_string($db, $_POST['email']);
	 $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	 $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	 //ensure that form fields are filled properly
	 if(empty($username)){
		array_push($errors, "Username is required"); // add error to erros array
	 }
	 if(empty($email)){
		array_push($errors, "Email is required"); // add error to erros array
	 }
	 if(empty($password_1)){
		array_push($errors, "Password is required"); // add error to erros array
	 }
		if($password_1 != $password_2){
			array_push($errors, "The two passwords must match.");
		}
		// if there are no errors, save user to database
		if(count($errors) == 0){
			$password = md5($password_1); // encrypt password before storing in database
			$query = "INSERT INTO users(username,email,password)VALUES('$username','$email','$password_1')";
			mysqli_query($db,$query);

		}
 }

 ?>
