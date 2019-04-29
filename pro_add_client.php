<?php
	
	$con = mysql_connect("localhost", "root", "");
	$db = mysql_select_db("db_one", $con); 
	
	
		if(isset($_POST['submit']))
		{ 
			$client_name = $_POST['client_name'];
			
			$username = $_POST ["username"];
			
			$query = mysql_query("INSERT INTO clients (client_name, status) VALUES ('$client_name', '1')");
			
				if($query)
				{
					echo "<script> alert('Register Client is successful!');
							window.location.href='pro_history_order_pro.php?username=$username';</script>";
				}
				else
				{
					echo "<script> alert('Register Client is failed!');
							window.location.href='pro_register_order_pro.php?username=$username';</script>";
				}
			}
		
			mysql_close($con); 
		
?>