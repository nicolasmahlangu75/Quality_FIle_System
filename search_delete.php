<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "new_file_database";

$user_id = "";
$first_name = "";
$last_name = "";
$id_number = "";
$email_address = "";
$gender = "";
$phone_number = "";
$job_title = "";
$faculty = "";
$password = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try{

        $connect = mysqli_connect($host, $user, $password, $database);

    }catch (Exception $ex)
    {

        echo 'Error';

    }

    function getPosts()
    {

        $posts = array();

		    $posts[0] = $_POST['user_id'];
        $posts[1] = $_POST['first_name'];
        $posts[2] = $_POST['last_name'];
        $posts[3] = $_POST['id_number'];
        $posts[4] = $_POST['email_address'];
        $posts[5] = $_POST['gender'];
        $posts[6] = $_POST['phone_number'];
        $posts[7] = $_POST['job_title'];
        $posts[8] = $_POST['faculty'];
		    $posts[9] = $_POST['password'];


        return $posts;

    }
    //Search
    if(isset($_POST['search']))
    {
        $data = getPosts();

        $search_Query = "SELECT * FROM users WHERE user_id = $data[0]";

        $search_Result = mysqli_query($connect, $search_Query);

        if ($search_Result)
        {

            if(mysqli_num_rows($search_Result))
            {

                while($row = mysqli_fetch_array($search_Result))
                {

                    $first_name = $row['first_name'];
                    $last_name = $row['last_name'];
                    $id_number = $row['id_number'];
                    $email_address = $row['email_address'];
                    $gender = $row['gender'];
                    $phone_number = $row['phone_number'];
                    $job_title = $row['job_title'];
                    $faculty = $row['faculty'];
					          $password = $row['password'];

                }

            }else{

                echo"No data found for this id";

            }
        }else{

            echo 'Result Error';

        }

    }

   /* if(isset($_POST['insert']))
    {
        $data = getPosts();
        $insert_Query = "INSERT INTO `users`(`first_name`, `last_name`, `id_number`,`email_address`, `gender`,`phone_number`, `job_title`, `faculty`, `password`, `confirm_Password`) VALUES ('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]')";
        try{
            $insert_Result = mysqli_query($connect, $insert_Query);
                if($insert_Result)
                {
                    if(mysqli_affected_rows($connect) > 0)
                    {
                        echo 'Data Inserted';
                    }else{
                        echo 'Data not inserted ';
                    }
                }
        }catch(Exception $ex){
            echo 'Error Insert'.$ex->getMessage();
        }
    }
*/
    if(isset($_POST['delete']))
    {

        $data = getPosts();

        $delete_Query = "DELETE FROM users WHERE `user_id` = $data[0]";

        try{

            $delete_Result = mysqli_query($connect, $delete_Query);

                if($delete_Result)
                {

                    if(mysqli_affected_rows($connect) > 0)
                    {

                        echo 'Data Deleted';

                    }else{

                        echo 'Data not Deleted ';

                    }
                }
        }catch(Exception $ex){

            echo 'Error Delete'.$ex->getMessage();

        }

    }

    if(isset($_POST['update']))
    {

        $data = getPosts();
        $update_Query = "UPDATE `users` SET `first_name`='$data[1]',`last_name`='$data[2]',`id_number`='$data[3]',`email_address`='$data[4]',`gender`='$data[5]',`phone_number`='$data[6]',`job_title`='$data[7]',`faculty`='$data[8]',`password`='$data[9]' WHERE `user_id` = $data[0]";

        try{

            $update_Result = mysqli_query($connect, $update_Query);

                if($update_Result)
                {

                    if(mysqli_affected_rows($connect) > 0)
                    {

                        echo 'Data Updated';

                    }else{

                        echo 'Data not Updated ';

                    }

                }

        }catch(Exception $ex){

            echo 'Error Update'.$ex->getMessage();

        }

    }
?>
<!DOCTYPE html>
<html>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="registration.php">Register</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="adminlogin.php">Administrator Login</a></li>
</ul><br><br>
    <head>
        <title>Records</title>
        <link rel="stylesheet" type="text/css" href="css/styles_search_delete.css">
    </head>

    <div class = "container">


    <body>

        <form action="search_delete.php" method="POST">

    <br>
	<div class="input">

	<fieldset>

		<label>User_ID</label><input type="text" name="user_id" placeholder="user id"  value="<?php echo $user_id; ?>"><br><br>
        <label>First name</label><input type="text" name="first_name" placeholder="first name" value="<?php echo $first_name; ?>"><br><br>
        <label>Last name</label><input type="text" name="last_name" placeholder="last name" value="<?php echo $last_name; ?>"><br><br>
        <label>Id number</label><input type="text" name="id_number" placeholder="id number" value="<?php echo $id_number; ?>"><br><br>
		<label>Email</label><input type="text" name="email_address" placeholder="email address" value="<?php echo $email_address; ?>"><br><br>
       	<label>Gender</label><input type="text" name="gender" placeholder="gender" value="<?php echo $gender; ?>"><br><br>
	   <label>Contact</label><input type="text" name="phone_number" placeholder="phone number" value="<?php echo $phone_number; ?>"><br><br>
        <label>Job title</label><input type="text" name="job_title" placeholder="job title" value="<?php echo $job_title; ?>"><br><br>
        <label>Faculty</label><input type="text" name="faculty" placeholder="faculty" value="<?php echo $faculty; ?>"><br><br>
		 <label>Password</label><input type="password" name="password" placeholder="password" value="<?php echo $password; ?>"><br><br>

		  <input type="submit" name="update" value="Update">
        <input type="submit" name="delete" value="Delete">
        <input type="submit" name="search" value="Find">
	</fieldset>
	</div>

        </div>
    </body>
</html>
