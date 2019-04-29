<?php
	include "db_connect.php";
	
	if(isset($_GET['client_id']))
	{
		$client_id=$_GET['client_id'];
		
		$username = $_GET ["username"];
		
		mysql_query("DELETE FROM clients where client_id= $client_id");
		
		echo "<script>alert('Client is Deleted!')</script>";
		echo "<script>window.location.href='history_order_pro.php?username=$username';</script>";
	}
?>