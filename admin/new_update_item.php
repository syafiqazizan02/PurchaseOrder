<?php
	include "db_connect.php";
	include "database.php";
	
		$res_id =$_POST['res_id'];
		$id = $_POST['id'];
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

	$sql="UPDATE new_item SET  product='$product',model='$model', description='$description',shipping='$shipping', price='$price', quantity='$quantity',remark='$remark', amount='$amount', gst='$gst', t_amount='$t_amount' where item_id='$id'";

	$result2 = dbQuery($sql);

	echo "<script>alert('Request Order is Updated!')</script>";
	echo "<script>window.location.href = 'new_view_item.php?res_id=$res_id&id=$id'</script>";		
?>