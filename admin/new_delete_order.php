<?php
	include "db_connect.php";
	
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		
		mysql_query("DELETE FROM new_request where res_id= $id");
		mysql_query("DELETE FROM new_item where res_id= $id");
		
		echo "<script>alert('Request Order is Deleted!')</script>";
		echo "<script>window.location.href='new_view_order.php';</script>";
	}
?>