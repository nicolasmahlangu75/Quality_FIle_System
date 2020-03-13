<?php

$dbHost = "localhost";
$dbUsername = "root";
$dbpassword	= "";
$dbName = "file_m";

//database connection

$db = new mysqli($dbHost, $dbUsername,$dbpassword, $dbName);

if($db->connect_error)
{
	die("Connection failed: ". $db->connect_error);
}

?>