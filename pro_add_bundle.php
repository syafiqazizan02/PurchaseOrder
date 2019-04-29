<?php
	include "db_connect.php";
	include "database.php";

	$res_id= @$_REQUEST['res_id'];

	$result = mysql_query("SELECT * FROM pro_request where res_id=".$res_id);

	$username = $_POST ["username"];
	$res_id = $_POST['res_id'];
	$client_name = $_POST['client_name'];
	$company_name = $_POST['company_name'];
	$redate = $_POST['redate'];
	$product = $_POST['product'];
	$model = $_POST['model'];
	$description = $_POST['description'];
	$quantity = $_POST['quantity'];
	
	$sql="INSERT INTO pro_item (username, res_id, client_name, company_name, redate, product, model, description, quantity) VALUES ('".$username."','".$res_id."','".$client_name."','".$company_name."','".$redate."','".$product."','***".$model."','".$description."','".$quantity."')";

	$result2 = dbQuery($sql);

	echo "<script>alert('Request Order is Sucessfull!')</script>";
	echo "<script>window.location.href = 'pro_view_item.php?username=$username&&res_id=$res_id'</script>";
?>