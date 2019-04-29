<?php
	include "db_connect.php";
	
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		
		mysql_query("DELETE FROM staff_one where id= $id");
		
		echo "<script>alert('Receiver Person is Deleted!')</script>";
		echo "<script>window.location.href='receiver.php';</script>";
	}
?>