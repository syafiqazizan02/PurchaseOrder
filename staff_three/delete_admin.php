<?php
	include "db_connect.php";
	
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		
		mysql_query("DELETE FROM admin where id= $id");
		
		echo "<script>alert('Admin Person is Deleted!')</script>";
		echo "<script>window.location.href='admin.php';</script>";
	}
?>