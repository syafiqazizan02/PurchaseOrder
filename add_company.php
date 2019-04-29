<?php

	$con = mysql_connect("localhost", "root", "");
	$db = mysql_select_db("db_one", $con); 
		
		if(isset($_POST['submit']))
		{ 
			$company_name = $_POST['company_name'];
			$address = $_POST['address'];
			$postcode = $_POST['postcode'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			
			$username = $_POST ["username"];
			
			$query = mysql_query("INSERT INTO company (company_name, address, postcode, city, state, status) VALUES ('$company_name', '$address', '$postcode', '$city', '$state', '1')");
	
				if($query)
				{
					echo "<script> alert('Register Supplier is successful!');
							window.location.href='history_order.php?username=$username';</script>";
				}
				else
				{
					echo "<script> alert('Register Supplier is failed!');
							window.location.href='register_order.php?username=$username';</script>";
				}
			}
		
			mysql_close($con); 
		
?>