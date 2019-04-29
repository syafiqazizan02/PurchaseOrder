<?php
	include "db_connect.php";
	include "database.php";
	
		$res_id =$_POST['res_id'];
		$dev_num = $_POST['dev_num'];
		

	$sql="UPDATE pro_request SET  dev_num='$dev_num' where res_id='$res_id'";

	$result2 = dbQuery($sql);

	echo "<script>alert('Reference Number is Updated!')</script>";
	echo "<script>window.location.href = 'pro_pending_item.php?res_id=$res_id'</script>";		
?>