<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Records</title>
    </head>
    <body>
        <form action="search_delete.php" method="POST">
        <input type="number" name="id" placeholder="id"><br><br>
        <input type="text" name="firstname" placeholder="firstname"><br><br>
        <input type="text" name="lastname" placeholder="lastname"><br><br>
        <input type="text" name="idnumber" placeholder="idnumber"><br><br>
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

        <input type="text" name="phone_number" id="name" placeholder="Phone_number" required ="required *"><br><br>

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

    <input type="password" name="password" id="name" placeholder="Password" required ="required *"><br><br>
    <input type="checkbox" onclick="myFunction()">Show password
    <input type="password" name="conPas" id="name" placeholder="Confirm Password" required ="required *"><br><br><br>

    </body>
</html>