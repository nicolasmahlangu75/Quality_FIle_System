<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "test_db";

$id = "";
$firstname = "";
$lastname = "";
$idnumber = "";
$gender = "";
$countrycode = "";
$phonenumber = "";
$jobtitle = "";
$faculty = "";
$password= "";
$confirmpassword= "";
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
        $posts[0] = $_POST['id'];
        $posts[1] = $_POST['firstname'];
        $posts[2] = $_POST['lastname'];
        $posts[3] = $_POST['idnumber'];
        $posts[4] = $_POST['gender'];
        $posts[5] = $_POST['countrycode'];
        $posts[6] = $_POST['phonenumber'];
        $posts[7] = $_POST['jobtitle'];
        $posts[8] = $_POST['faculty'];
        $posts[9] = $_POST['password'];
        $posts[10] = $_POST['confirmpassword'];
        
        return $posts;


    }
    //Search
    if(isset($_POST['search']))
    {
        $data = getPosts();

        $search_Query = "SELECT * FROM users WHERE id = $data[0]";

        $search_Result = mysqli_query($connect, $search_Query);
        
        if ($search_Result)
        {
            if(mysqli_num_rows($search_Result))
            {
                while($row = mysqli_fetch_array($search_Result))
                {
                    $id = $row['id'];
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                    $idnumber = $row['idnumber'];
                    $gender = $row['gender'];
                    $countrycode = $row['countrycode'];
                    $phonenumber = $row['phonenumber'];
                    $jobtitle = $row['jobtitle'];
                    $faculty = $row['faculty'];
                    $password = $row['password'];
                    $confirmpassword = $row['confirmpassword'];
                }
            }else{
                echo"No data found for this id";
            }
        }else{
            echo 'Result Error';
        }
    }

    if(isset($_POST['insert']))
    {
        $data = getPosts();
        $insert_Query = "INSERT INTO `users`(`firstname`, `lastname`, `idnumber`, `gender`, `countrycode`, `phonenumber`, `jobtitle`, `faculty`, `password`, `confirmPassword`) VALUES ('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]')";
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


    if(isset($_POST['delete']))
    {
        $data = getPosts();
        $delete_Query = "DELETE FROM `users` WHERE `id` = $data[0]";
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
        $update_Query = "UPDATE `users` SET `firstname`='$data[1]',`lastname`='$data[2]',`idnumber`='$data[3]',`gender`='$data[4]',`countrycode`='$data[5]',`phonenumber`='$data[6]',`jobtitle`='$data[7]',`faculty`='$data[8]',`password`='$data[9]',`confirmpassword`='$data[10]' WHERE `id` = $data[0]";
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
  <li><a href="Home.php">Home</a></li>
  <li><a href="Register.php">Register</a></li>
  <li><a href="Login.php">Login</a></li>
  <li><a href="search_delete.php">Administrator</a></li>
</ul><br><br>
    <head>
        <title>Records</title>
        <link rel="stylesheet" type="text/css" href="css/styles_search_delete.css">
    </head>
  
    <div class = "container">
    <img src="image/crud.png" height="10%" width="10%"/>
    <body>
        <form action="search_delete.php" method="POST">
    <br>
        <input type="number" name="id" placeholder="id" value="<?php echo $id; ?>"><br><br>
        <input type="text" name="firstname" placeholder="firstname" value="<?php echo $firstname; ?>"><br><br>
        <input type="text" name="lastname" placeholder="lastname" value="<?php echo $lastname; ?>"><br><br>
        <input type="text" name="idnumber" placeholder="idnumber" value="<?php echo $idnumber; ?>"><br><br>
      
        <input type="text" name="gender" placeholder="gender" value="<?php echo $gender; ?>"><br><br>
        <input type="text" name="countrycode" placeholder="countrycode" value="<?php echo $countrycode; ?>"><br><br>
        <input type="text" name="phonenumber" placeholder="phonenumber" value="<?php echo $phonenumber; ?>"><br><br>
        <input type="text" name="jobtitle" placeholder="jobtitle" value="<?php echo $jobtitle; ?>"><br><br>
        <input type="text" name="faculty" placeholder="faculty" value="<?php echo $faculty; ?>"><br><br>
        <input type="text" name="password" placeholder="password" value="<?php echo $password; ?>"><br><br>
        <input type="text" name="confirmpassword" placeholder="confirmpassword" value="<?php echo $confirmpassword; ?>"><br><br>
       
        <div>
        <input type="submit" name="insert" value="Add">
        <input type="submit" name="update" value="Update">
        <input type="submit" name="delete" value="Delete">
        <input type="submit" name="search" value="Find">
        </div>

        </div>
    </body>
</html>