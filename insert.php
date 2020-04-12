<?php

$conn = mysqli_connect('localhost','root','','new_file_database');

        if (isset($_POST['btn-submit'])) {

          $staff_number = $_POST['staff_number'];
          $first_name = $_POST['first_name'];
          $last_name = $_POST['last_name'];
          $id_number = $_POST['id_number'];
          $email_address = $_POST['email_address'];
          $phone_number = $_POST['phone_number'];
          $gender =$_POST['gender'];
          $job_title = $_POST['job_title'];
          $faculty = $_POST['faculty'];
          $password = $_POST['password'];
          $conPas = $_POST['conPas'];

          if (empty($staff_number) || empty($first_name) || empty($last_name) || empty($id_number) || empty($email_address) || empty($phone_number) || empty($password) || empty($conPas) || empty($gender) || empty($job_title) || empty($faculty)) {

                header("location:registration.php?signup=empty");
                exit();

            }else {

                  if (!preg_match("/^[a-zA-Z]*$/",$first_name) || !preg_match("/^[a-zA-Z]*$/",$last_name)) {

                    header('location: registration.php?signup=char');

                    exit();

                  }elseif (!preg_match("/^\d{10}+$/",$phone_number)) {

                      echo'<script>alert("Please enter a phone number with a length of 10 digits!");</script>';

                  }
                  else {

                      if (!filter_var($email_address,FILTER_VALIDATE_EMAIL)) {

                          header("location: registration.php?signup=email&staff_number=$staff_number&first_name=$first_name&last_name=$last_name&id_number=$id_number&email_address=$email_address&gender=$gender&phone_number=$phone_number&job_title=$job_title&faculty=$faculty&password=$password&conPas=$conPas");
                          exit();

                      }else {

                        $sql = "SELECT * FROM users WHERE email_address = '".$_POST["email_address"]."'";

                        $result = $conn->query($sql);

                        $staff_number = "SELECT * FROM staff WHERE staff_number = '".$_POST["staff_number"]."'";
                        $staff_result = $conn->query($staff_number);

                        $id_number = "SELECT * FROM users WHERE id_number = '".$_POST["id_number"]."'";
                        $id_result = $conn->query($id_number);

                        $phone_number = "SELECT * FROM users WHERE phone_number = '".$_POST["phone_number"]."'";
                        $phone_result = $conn->query($phone_number);

                            if ($result->num_rows > 0) {

                              echo"<script>alert('Sorry, your e-mail address already exists in our database!');</script>";

                            }elseif ($staff_result->num_rows < 0) {

                                echo"<script>alert('Staff number you entered does not exist in our database!');</script>";

                            }elseif ($phone_result->num_rows > 0) {

                                echo'<script>alert("Phone number already exists!");</script>';

                            }elseif ($id_result->num_rows > 0) {

                                die("<script>alert('ID number entered already exist!');</script>");

                            }else{

                                $password = md5('password');
                                $sql = "INSERT INTO users(staff_number,first_name,last_name,id_number,email_address,gender,phone_number,job_title,faculty,password) VALUES('".$_POST["staff_number"]."','".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["id_number"]."','".$_POST["email_address"]."','".$_POST["gender"]."','".$_POST["phone_number"]."','".$_POST["job_title"]."','".$_POST["faculty"]."','$password')";
                                $staff_test = "INSERT INTO staff(staff_number) VALUES('".$_POST["staff_number"]."')";

                                  if ($conn->query($sql) === TRUE && $conn->query($staff_test) === TRUE) {

                                      echo'<script>alert("You have sucessfully registered!");</script>';
                                      header('location: registration.php?signup=success');
                                      header('location: login.php');
                                      exit();


                                  }
                                  else {

                                      echo'<script>alert("Something went wrong");</script>';

                                }

                        $conn->close();

                      }

                      }

                  }

            }



      }
