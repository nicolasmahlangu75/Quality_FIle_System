<?php

 require_once("include/connection.php");

$user_id = mysqli_real_escape_string($conn,$_GET['user_id']);


mysqli_query($conn,"DELETE FROM users WHERE user_id='$user_id'")or die(mysql_error());
echo "<script type='text/javascript'>alert('Deleted File!');document.location='viewL.php'</script>";
?>