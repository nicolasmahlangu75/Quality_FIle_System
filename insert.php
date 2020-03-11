<?php

$conn = mysqli_connect('localhost','root','','new_file_database');

        if (isset($_POST['btn-submit'])) {

                  $sql = "SELECT * FROM users WHERE email_address = '".$_POST["email_address"]."'";

                  $result = $conn->query($sql);

                      if ($result->num_rows > 0) {

                        die("Sorry, your e-mail already exists in our database!");

                      }else{

                          $sql = "INSERT INTO users(first_name,last_name,id_number,email_address,gender,phone_number,job_title,faculty,password) VALUES('".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["id_number"]."','".$_POST["email_address"]."','".$_POST["gender"]."','".$_POST["phone_number"]."','".$_POST["job_title"]."','".$_POST["faculty"]."','".$_POST["password"]."')";

                            if ($conn->query($sql) === TRUE) {

                                echo"You have sucessfully registered!";

                            }
                            else {

                                echo"Something went wrong";

                          }

                  $conn->close();
            }

      }
