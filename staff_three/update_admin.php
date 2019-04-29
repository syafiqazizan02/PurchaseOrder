<?php
	include "db_connect.php";
	include "database.php";
	
		$id = $_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];

	$sql="UPDATE admin SET  username='$username', password='$password' where id='$id'";

	$result2 = dbQuery($sql);

	echo "<script>alert('Admin Person is Updated!')</script>";
	echo "<script>window.location.href = 'admin.php'</script>";		
?>