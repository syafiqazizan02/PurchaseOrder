<?php
	include "db_connect.php";
	
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		
		mysql_query("DELETE FROM user where user_id= $id");
		
		echo "<script>alert('Sale Person is Deleted!')</script>";
		echo "<script>window.location.href='users.php';</script>";
	}
?>