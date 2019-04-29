<?php
	include "db_connect.php";
	
	$res_id= @$_REQUEST['res_id'];

	$result = mysql_query("SELECT * FROM pro_request where res_id=".$res_id);
	
	$id=$_GET['id'];
	
	if(isset($_GET['id']))
	{	
		$username = $_GET ["username"];
		
		mysql_query("DELETE FROM pro_item where item_id=$id");	
	}
	
	echo "<script>alert('Request Order is Deleted!')</script>";
	echo "<script>window.location.href = 'pro_view_item.php?username=$username&&res_id=$res_id&&id=$id'</script>";	
?>