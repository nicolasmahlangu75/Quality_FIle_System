<?php
// connection to database
$conn = mysqli_connect("localhost","root","","new_file_database");
//check connection to database
    if($conn->connect_errno > 0)
    {
        die("Unable to connection to database[".$conn->connect_error."]");
    }
?>
