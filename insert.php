<?php

$conn = mysqli_connect('localhost','root','','new_file_database');

        if (isset($_POST['btn-submit'])) {

                  $sql = "SELECT * FROM users WHERE email_address = '".$_POST["email_address"]."'";

                  $result = $conn->query($sql);

                  $staff_number = "SELECT * FROM staff WHERE staff_number = '".$_POST["staff_number"]."'";
                  $staff_result = $conn->query($staff_number);

                  $id_number = "SELECT * FROM users WHERE id_number = '".$_POST["id_number"]."'";
                  $id_result = $conn->query($id_number);

                  $phone_number = "SELECT * FROM users WHERE phone_number = '".$_POST["phone_number"]."'";
                  $phone_result = $conn->query($phone_number);

                      if ($result->num_rows > 0) {

                        echo("Sorry, your e-mail address already exists in our database!");

                      }elseif ($staff_result->num_rows > 0) {

                          echo("Staff number you entered is already taken!");

                      }elseif ($phone_result->num_rows > 0) {

                          echo("Phone number already exists!");

                      }elseif ($id_result->num_rows > 0) {

                          die("ID number entered already exist!");

                      }else{

                          $sql = "INSERT INTO users(staff_number,first_name,last_name,id_number,email_address,gender,phone_number,job_title,faculty,password) VALUES('".$_POST["staff_number"]."','".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["id_number"]."','".$_POST["email_address"]."','".$_POST["gender"]."','".$_POST["phone_number"]."','".$_POST["job_title"]."','".$_POST["faculty"]."','".$_POST["password"]."')";
                          $staff_test = "INSERT INTO staff(staff_number) VALUES('".$_POST["staff_number"]."')";

                            if ($conn->query($sql) === TRUE && $conn->query($staff_test) === TRUE) {

                                echo"You have sucessfully registered!";
                                header('location: login.php');

                            }
                            else {

                                echo"Something went wrong";

                          }

                  $conn->close();

                }

      }
