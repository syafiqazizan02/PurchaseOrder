<?php
		
	if(isset($_POST['process'])){
		
		include('db_connect.php');
		
		$res_id = $_POST['res_id'];
		
		$sql = "UPDATE new_request SET approve='1' WHERE res_id = '$res_id'";
					
		$run = mysql_query($sql);
			
		if($run){
			
			echo "<script>alert('Item is Complete!')</script>";
			echo "<script>window.open('new_pending_item.php','_self')</script>";
			mysql_close($con);	
		}
	}
	
	
	if(isset($_POST['done'])){
		
		include('db_connect.php');
		
		$res_id = $_POST['res_id'];
		
		$sql = "UPDATE new_request SET approve='0' WHERE res_id = '$res_id'";
					
		$run = mysql_query($sql);
			
		if($run){
			
			echo "<script>alert('Item is Pending!')</script>";
			echo "<script>window.open('new_pending_item.php','_self')</script>";
			mysql_close($con);
		}
	}
	
?>