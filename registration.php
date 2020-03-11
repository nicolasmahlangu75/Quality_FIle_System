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

      <img src="./images/reg.jpg" alt="icon" class="logo">

    <form action="insert.php" method="post">

      <h1>Register new account</h1>


      <input type="text" name="first_name" placeholder="First_name" required><br><br>
      <input type="text" name = "last_name" placeholder="Last_name"><br><br>
      <input type="text" name="id_number" placeholder="ID number"><br><br>
      <input type="email" name="email_address" class="email" placeholder="E-mail address"><br><br>

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

    <input type ="checkbox" id = "check"><span id ="check" required>I agree to all terms and conditions.</span><br><br>
    <button type="submit" name ="btn-submit" class="btn-register">CREATE  NEW ACCOUNT</button>
    <button type="submit" class="btn-login">LOG IN NOW</button>

  </form>

  </div>

  </body>
</html>
