<?php
		
	if(isset($_POST['process'])){
		
		include('db_connect.php');
		
		$res_id = $_POST['res_id'];
		
		$sql = "UPDATE pro_request SET status ='1' WHERE res_id = '$res_id'";
					
		$run = mysql_query($sql);
			
		if($run){
			
			echo "<script>alert('Status is Done!')</script>";
			echo "<script>window.open('pro_view_order.php','_self')</script>";
			mysql_close($con);	
		}
	}
	
	
	if(isset($_POST['done'])){
		
		include('db_connect.php');
		
		$res_id = $_POST['res_id'];
		
		$sql = "UPDATE pro_request SET status ='0' WHERE res_id = '$res_id'";
					
		$run = mysql_query($sql);
			
		if($run){
			
			echo "<script>alert('Status is Process!')</script>";
			echo "<script>window.open('pro_view_order.php','_self')</script>";
			mysql_close($con);
		}
	}
	
?>