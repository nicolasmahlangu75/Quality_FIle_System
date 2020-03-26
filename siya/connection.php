<?php 

$host = 'localhost';

$user = 'root';

$pass = '';

$db = 'new_file_database';

$conn = new mysqli($host,$user,$pass,$db);

//check connesction 

if($conn->connect_error)

{

    die("connection failed: " . $conn->connect_error);

}

?>