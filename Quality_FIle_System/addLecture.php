<?php if(!isset($_SESSION)){
	session_start();
	}
?>

<?php include('header.php'); ?>

	<div class="recipient_reg" style="background-color:#272327;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Add Lecture</h3>

		<div class="formstyle" style="float: right;padding:25px;border: 1px solid lightgrey;margin-right:320px; margin-bottom:30px;background-color: #101011;color:#d4530d;;">
		<form enctype="multipart/form-data" method="post" class="text-center" style="margin-left: 110px">
			 <div class="col-md-12">

			 		<label>
					    <input type="text" name="staffNr" value="" placeholder="staffNr" required>
					</label><br><br>
					<label>
					    <input type="text" name="name" value="" placeholder="Full name" required>
					</label><br><br>
					<label>
						 <input type="text" name="address" value="" placeholder="address" required>
					</label><br><br>
					<label>
						 <input type="text" name="contact" value="" placeholder="contact" required>
					</label><br><br>

					<label>
						 <input type="email" name="email"  value="" placeholder="email" required>
					</label><br><br>

					<label>
						 <select name="Department" required>
										<option>-department-</option>
										<option>Software</option>
										<option>infomatic</option>
									</select>
					</label><br><br>
					<label>


					<button name="submit" type="submit" style="margin-left:148px;margin-top: 4px;width:95px;border-radius: 3px;height: 30px">Add</button> <br>

			</div>	<!-- col-md-12 -->


				</form>
			</div>




	</div>
	</body>
    </html>
