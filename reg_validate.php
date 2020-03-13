<?php

      // Declare variables
      $first_name_error = $last_name_error = $id_number_error = $email_error = $gender_error = $phone_number_error = $job_type_error = $faculty_error = $password_error

      //Declare form post method
      if ($_SERVER["REQUEST_METHOD"] == "POST"){

          if (empty($_POST["first_name"])) {

              $first_name_error = "Name is required";
          }else {

            $first_name = test_input($_POST["first_name"]);

            //Check if first_name contains letters only
            if (!preg_match("/^[a-zA-Z]*$/",first_name)) {

                $first_name_error = "Numbers can't included in the name field!";
            }

          }

      }

          if (empty($_POST[])) {


          }

 ?>
