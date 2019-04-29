<?php
	include "db_connect.php";
	include "database.php";
	
		$id = $_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];

	$sql="UPDATE staff_two SET  username='$username', password='$password' where id='$id'";

	$result2 = dbQuery($sql);

	echo "<script>alert('Account Person is Updated!')</script>";
	echo "<script>window.location.href = 'account.php'</script>";		
?>