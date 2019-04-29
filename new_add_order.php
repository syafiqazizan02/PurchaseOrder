<?php
	
	$con = mysql_connect("localhost", "root", "");
	$db = mysql_select_db("db_one", $con); 
		
		if(isset($_POST['submit']))
		{ 

			$client_name = $_POST['client_name'];
			$client_pic = $_POST['client_pic'];
			$client_email = $_POST['client_email'];
			$client_number = $_POST['client_number'];
			$company_name = $_POST['company_name'];
			$company_pic = $_POST['company_pic'];
			$company_email = $_POST['company_email'];
			$address = $_POST['address'];
			$postcode = $_POST['postcode'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$redate = $_POST['redate'];
			
			$username = $_POST ["username"];
			
			
			$query = mysql_query("INSERT INTO new_request (username, client_name, client_pic, client_email, client_number, company_name, company_pic, company_email, total, address, postcode, city, state, redate, delivered, approve) VALUES ('$username','$client_name', '$client_pic', '$client_email', '$client_number', '$company_name', '$company_pic', '$company_email', '0', '$address', '$postcode', '$city', '$state', '$redate', '0', '0')");
				
				if($query)
				{
					echo "<script> alert('New Order is successful!');
							window.location.href='new_view_order.php?username=$username';</script>";
				}
				else
				{
					echo "<script> alert('New Order is failed!');
							window.location.href='new_display_order.php?username=$username';</script>";
				}
			}
		
			mysql_close($con); 
		
?>