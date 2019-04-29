<?php
  
  $conn = mysqli_connect('localhost','root','','db_one');
  
  $request=$_POST['request'];
  
  $query="select * from company where company_name='$request'";
  
  $output=mysqli_query($conn,$query);
  
  while($fetch = mysqli_fetch_assoc($output))
  {
?>
	<input type="hidden" class="form-control" name="" value="<?php echo $fetch['company_name']?>" readonly>
	<div class='form-group'>
		<label align="center"><b>Address:</b></label>
		<input type="text" class="form-control" name="address" value="<?php echo $fetch['address']?>" readonly>
	</div>
	<div class='form-group'>
		<label align="center"><b>Postcode:</b></label>
		<input type="text" class="form-control" name="postcode" value="<?php echo $fetch['postcode']?>" readonly>
	</div>
	<div class='form-group'>
		<label align="center"><b>City:</b></label>
		<input type="text" class="form-control" name="city" value="<?php echo $fetch['city']?>" readonly>
	</div>
	<div class='form-group'>
		<label align="center"><b>State:</b></label>
		<input type="text" class="form-control" name="state" value="<?php echo $fetch['state']?>" readonly>
	</div>
<?php   
  }
?>