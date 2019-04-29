<?php
	include "db_connect.php";
	
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		
		$username = $_GET ["username"];
		
		mysql_query("DELETE FROM request where res_id= $id");
		mysql_query("DELETE FROM item where res_id= $id");
		
		echo "<script>alert('Request Order is Deleted!')</script>";
		echo "<script>window.location.href='view_order.php?username=$username';</script>";
	}
?>