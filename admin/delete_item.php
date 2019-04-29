<?php
	include "db_connect.php";
	
	$res_id= @$_REQUEST['res_id'];

	$result = mysql_query("SELECT * FROM request where res_id=".$res_id);
	
	$id=$_GET['id'];
	
	if(isset($_GET['id']))
	{	
		mysql_query("DELETE FROM item where item_id=$id");	
	}
	
	echo "<script>alert('Request Order is Deleted!')</script>";
	echo "<script>window.location.href = 'view_item.php?res_id=$res_id&id=$id'</script>";	
?>