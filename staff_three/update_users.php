<?php
	include "db_connect.php";
	include "database.php";
	
		$user_id = $_POST['user_id'];
		//$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		//$dep = $_POST['dep'];
		//$pos = $_POST['pos'];
		//$branch = $_POST['branch'];
		//$email = $_POST['email'];

	$sql="UPDATE user SET  username='$username', password='$password' where user_id='$user_id'";

	$result2 = dbQuery($sql);

	echo "<script>alert('Sale Person is Updated!')</script>";
	echo "<script>window.location.href = 'users.php'</script>";		
?>