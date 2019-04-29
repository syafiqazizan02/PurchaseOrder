<?php
	include "db_connect.php";
	
	if(isset($_GET['company_id']))
	{
		$company_id=$_GET['company_id'];
		
		$username = $_GET ["username"];
		
		mysql_query("DELETE FROM company where company_id= $company_id");
		
		echo "<script>alert('Supplier is Deleted!')</script>";
		echo "<script>window.location.href='pro_history_order.php?username=$username';</script>";
	}
?>