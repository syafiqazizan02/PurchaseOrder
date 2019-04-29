<?php
	include "db_connect.php";
	
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		
		mysql_query("DELETE FROM staff_two where id= $id");
		
		echo "<script>alert('Account Person is Deleted!')</script>";
		echo "<script>window.location.href='account.php';</script>";
	}
?>