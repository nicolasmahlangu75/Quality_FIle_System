<html>
<head>

<?php
include 'connection.php';
$staffNr = $_POST['staffNr'];
$name = $_POST['user'];
$surname = $_POST['surname'];
$phoneNr = $_POST['phoneNr'];

$sql = "INSERT into lectures(staffNr,name,surname,phoneNr) values($25246,'$aka','$siria','$0715875632')";
 if($_POST['submit']){
     if(mysqli_query($conn,$sql)){
         echo"data added successfully";
     }else{
         echo "something went wrong";
     }
 }
?>
<body>

<form action= "add.php " method="POST">
staffNr:<input type= "text" name= "staffNr"> 
Name:<input type= "text" name= "user"> 
surname:<input type= "text" name= "surname"> 
phoneNr:<input type= "text" name= "phoneNr"> 

 <input type="submit" name = "submit" value = "send Info">
</form>
</body>
</html>