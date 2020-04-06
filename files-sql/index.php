<?php

include 'filesLogic.php';

?>

<!DOCTYPE html>

<html lang="en">

<head>

	<link rel="stylesheet" href="style.css">

	<title>Files Upload and Download</title>

</head>

<body>

	<div class="container">

	   <div class="row">

	       <form action="index.php" method="post" enctype="multipart/form-data" >

		          <table width="80%" border="2">


			             <tr>

                     <th colspan="4">LECTURER FILE MANAGEMENT DASHBOARD<label><a href="index.php">

				                   <label for=dirname>Create New Folder</label>

					                      <input id=dirname type=text name=name value="" />

					                           <input type="submit" value="create" />

					                                <h3>Upload File</h3>

					                                     <input type="file" name="myfile"> <br>


					                                          <button type="submit" name="save">upload</button></a></label></th>

			           </tr>

			           <tr>

                   <td>File Name</td>

				               <td>File Size(KB)</td>

					                  <td>View</td>

			          </tr>

	<?php

		$sql = "SELECT file_name,size FROM files";
    $result_set = mysqli_query($conn,$sql);

			while($row=mysqli_fetch_array($result_set)){

	?>

			<tr>

				<td><?php echo $row['file_name'] ?>

					<td><?php echo $row['size'] ?></td>

						<td><a href="uploads/<?php echo $row['file_name'] ?>" target="_blank">view file</a></td>

    </tr>

<?php

 }

 ?>


		    </table>

		</form>

      </div>

    </div>

</body>

</html>
