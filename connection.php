<?php 
$host = 'localhost';
$user = 'roots';
$pass = '';
$db = 'qtm';


$conn = new mysqli($host,$user,$pass,$db);

//check connesction 

if($conn->connect_error)
{
    die("connection failed: " . $conn->connect_error);
}
?>