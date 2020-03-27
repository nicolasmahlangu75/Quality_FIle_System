<?php

$host = 'localhost';

$user = 'root';

$pass = '';

$db = 'new_file_database';

$conn = new mysqli($host,$user,$pass,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM users WHERE user_id='" . $_POST["users"];

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>