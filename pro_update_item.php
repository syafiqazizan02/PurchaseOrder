<?php
	include "db_connect.php";
	include "database.php";
	
		$res_id =$_POST['res_id'];
		$id = $_POST['id'];
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
		$username = $_POST ["username"];
		

	$sql="UPDATE pro_item SET  product='$product', model='$model', description='$description', price='$price', quantity='$quantity', amount='$amount', gst='$gst', t_amount ='$t_amount' where item_id='$id'";

	$result2 = dbQuery($sql);

	echo "<script>alert('Request Order is Updated!')</script>";
	echo "<script>window.location.href = 'pro_view_item.php?username=$username&&res_id=$res_id&&id=$id'</script>";		
?>