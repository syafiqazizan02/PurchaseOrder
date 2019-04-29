<?php
	include "db_connect.php";
	include "database.php";

	$res_id= @$_REQUEST['res_id'];

	$result = mysql_query("SELECT * FROM new_request where res_id=".$res_id);

	$res_id = $_POST['res_id'];
	$username = $_POST['username'];
	$client_name = $_POST['client_name'];
	$company_name = $_POST['company_name'];
	$redate = $_POST['redate'];
	$product = $_POST['product'];
	$model = $_POST['model'];
	$description = $_POST['description'];
	$shipping = $_POST['shipping'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$eta = $_POST['eta'];
	$remark = $_POST['remark'];
	$amount = ($price * $quantity);
	$amount = sprintf('%0.2f',$amount);
	$gst =  ( $amount * 0.06);
	$gst = sprintf('%0.2f',$gst);
	$t_amount = ($gst + $amount);
	$t_amount = sprintf('%0.2f',$t_amount);
	

	$sql="INSERT INTO new_item (res_id, username, client_name, company_name, redate, product, model, description, shipping, price, quantity, eta, remark, amount, gst, t_amount) VALUES ('".$res_id."','".$username."','".$client_name."','".$company_name."','".$redate."','".$product."','".$model."','".$description."','".$shipping."', '".$price."','".$quantity."','".$eta."','".$remark."','".$amount."','".$gst."', '".$t_amount."')";

	$result2 = dbQuery($sql);

	echo "<script>alert('Request Order is Sucessfull!')</script>";
	echo "<script>window.location.href = 'new_view_item.php?res_id=$res_id'</script>";
?>