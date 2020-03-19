<?php
include 'connection.php';
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

 $username = $_POST["email_address"];
 $password = $_POST["password"];

 if(trim($username)!=""and trim($password)!= "")
 {

     //Sanitizes whatever is entered
     $username=stripcslashes($username);
     $password=stripcslashes($password);
     $username=strip_tags($_POST["email_address"]);
     $password=strip_tags($_POST["password"]);

     $username= mysqli_real_escape_string($conn,$username);
     $password= mysqli_real_escape_string($conn,$password);

     //SQL Query
     $query = mysqli_query($conn,"SELECT * FROM users WHERE email_address ='$username' AND password ='$password'");
     //apply mysqli
     $numrows= mysqli_num_rows($query);

     if($numrows >0)
     {

          //session username
         $_SESSION["email_address"]= $username;

              echo "Login successful";
              header('location: files-sql/downloads.php');

        }
        else
        {

              echo "Failed to login! Check if your password and email_address are valid";

        }

   }

?>
