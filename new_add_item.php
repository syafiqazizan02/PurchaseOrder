<?php
	include "db_connect.php";
	include "database.php";

	$res_id= @$_REQUEST['res_id'];

	$result = mysql_query("SELECT * FROM new_request where res_id=".$res_id);

	$username = $_POST ["username"];
	$res_id = $_POST['res_id'];
	$client_name = $_POST['client_name'];
	$company_name = $_POST['company_name'];
	$redate = $_POST['redate'];
	$product = $_POST['product'];
	$model = $_POST['model'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$amount = ($price * $quantity);
	$amount = sprintf('%0.2f',$amount);
	$gst =  ( $amount * 0.06);
	$gst = sprintf('%0.2f',$gst);
	$t_amount = ($gst + $amount);
	$t_amount = sprintf('%0.2f',$t_amount);

	$sql="INSERT INTO new_item (username, res_id, client_name, company_name, redate, product, model, description, price, quantity, amount, gst, t_amount) VALUES ('".$username."','".$res_id."','".$client_name."','".$company_name."','".$redate."','".$product."','".$model."','".$description."','".$price."','".$quantity."','".$amount."','".$gst."','".$t_amount."')";

	$result2 = dbQuery($sql);

	echo "<script>alert('Request Order is Sucessfull!')</script>";
	echo "<script>window.location.href = 'new_view_item.php?username=$username&&res_id=$res_id'</script>";
?>