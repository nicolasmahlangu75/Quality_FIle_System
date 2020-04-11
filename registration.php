<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="registration.css">

    <title>Registration</title>
  </head>
  <body>

    <div class="register">

      <img src="./images/image_12.jpg" alt="icon" class="logo">

    <form action="insert.php" method="post">

      <h1>Register new account</h1>

      <?php

                  if (isset($_GET['staff_number'])) {

                      $staff_number = $_GET['staff_number'];
                      //if a value for stuff number was entered, the staff number will still appear if something goes wrong in the process of filling in the registration form.
                      echo '<input type="text" name="staff_number" placeholder="Staff Number" value = "'.$staff_number.'">';

                  }else {

                      //this is just to make sure that the value for first_name will remain empty if nothing was enetered.
                      echo '<input type="text" name="staff_number" placeholder="Staff Number">';

                  }


                  if (isset($_GET['first_name'])) {

                    $first_name = $_GET['first_name'];
                    //if a value for first name was entered, the staff number will still appear if something goes wrong in the process of filling in the registration form.
                    echo '<input type="text" name="first_name" placeholder="First_name" value = "'.$first_name.'">';

                  }else {

                      //this is just to make sure that the value for first_name will remain empty if nothing was enetered.
                      echo '<input type="text" name="first_name" placeholder="First_name">';

                  }


                  if (isset($_GET['last_name'])) {

                    $last_name = $_GET['last_name'];
                    //if a value for last name was entered, the staff number will still appear if something goes wrong in the process of filling in the registration form.
                    echo '<input type="text" name="last_name" placeholder="Last_name" value = "'.$last_name.'">';

                  }else {

                      //this is just to make sure that the value for first_name will remain empty if nothing was enetered.
                      echo '<input type="text" name="last_name" placeholder="Last_name">';

                  }

                  if (isset($_GET['id_number'])) {

                    $id_number = $_GET['id_number'];
                    //if a value for id number was entered, the staff number will still appear if something goes wrong in the process of filling in the registration form.
                    echo '<input type="text" name="id_number" placeholder="ID number" value = "'.$id_number.'">';

                  }else {

                      //this is just to make sure that the value for first_name will remain empty if nothing was enetered.
                      echo '<input type="text" name="id_number" placeholder="ID number">';

                  }


       ?>

      <input type="email" class = "email" name="email_address" placeholder="E-mail address"><br>

      Gender:  <select name = "gender" class="gender_type" required>

                  <option>-Select-</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Others</option>

                </select><br><br><br>

    Country code:  <select class="country">

        <option>-Select-</option>
        <option>+91</option>
        <option>+27</option>
        <option>+11</option>
        <option>+12</option>
        <option>+97</option>
        <option>+95</option>

        <input type="text" name="phone_number" id="name" placeholder="Phone_number"><br><br>

    </select><br><br>

    Job title: <select name="job_title" class="job" required>

      <option>-Select-</option>
      <option>Dean</option>
      <option>Lecturer</option>
      <option>Professor</option>

    </select><br><br>

    Faculty: <select name = "faculty" class="faculty" required>
                <option>-Select-</option>
                <option>ARTS AND DESIGN</option>
                <option>ECONOMICS AND FINANCE</option>
                <option>ENGINEERING AND THE BUILDING ENVIRONMENT</option>
                <option>HUMANITIES</option>
                <option>ICT</option>
                <option>MANAGEMENT SCIENCE</option>
                <option>SCIENCE</option>

              </select><br><br>

    <input type="password" name="password" id="name" placeholder="Password"><br><br>
    <input type="checkbox" onclick="myFunction()">Show password
    <input type="password" name="conPas" id="name" placeholder="Confirm Password"><br><br><br>

    <input type ="checkbox" id = "check"><span id ="check" required>I agree to all terms and conditions.</span><br><br>
    <button type="submit" name ="btn-submit" class="btn-register">CREATE  NEW ACCOUNT</button><br><br>

      <footer>Page by <a href="https://github.com/nicolasmahlangu75">Nicholas</a></footer>

  </form>

      <?php

            if (!isset($_GET['signup'])) {

              exit();

            }else {

              //the name of the variable used to check for errors.
              $signupCheck = $_GET['signup'];

                //error message for unoccupied fields
                if ($signupCheck == 'empty') {

                    echo"<script>alert('You did not fill in all fields!');</script>";
                    exit();

                }//error message for entering numbers in the first_name and last_name fields.
                elseif ($signupCheck == 'char') {

                    echo"<script>alert('You used invalid characters!');</script>";
                    exit();

                }//error message for invalid email_address.
                elseif ($signupCheck == 'email') {

                    echo"<script>alert('You used an invalid email!');</script>";
                    exit();

                }//message displayed if there's no error found in the code.
                elseif ($signupCheck == 'success') {

                  echo"<script>alert('You have successfully registered!');</script>";
                  exit();

                }

            }

        ?>

  </div>


  </body>
</html>
