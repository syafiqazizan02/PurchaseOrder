<?php
	include "db_connect.php";
	include "database.php";
	
		$res_id =$_POST['res_id'];
		$client_name = $_POST['client_name'];
		$client_pic = $_POST['client_pic'];
		$client_email = $_POST['client_email'];
		$company_name = $_POST['company_name'];
		$company_pic = $_POST['company_pic'];
		$company_email = $_POST['company_email'];
		$address = $_POST['address'];
		$postcode = $_POST['postcode'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$redate = $_POST['redate'];
		$prodate = $_POST['prodate'];
		$po_no = $_POST['po_no'];
		$attn = $_POST['attn'];
		$branch = $_POST['branch'];
		$branch_address = $_POST['branch_address'];
		

	$sql="UPDATE new_request SET  client_name='$client_name', client_pic='$client_pic', client_email='$client_email', company_name='$company_name', company_pic='$company_pic', company_email='$company_email', address='$address', postcode='$postcode', city='$city', state='$state', redate='$redate', prodate='$prodate', po_no='$po_no',attn='$attn', branch='$branch',branch_address='$branch_address' where res_id='$res_id'";

	$result2 = dbQuery($sql);

	echo "<script>alert('Request Order is Updated!')</script>";
	echo "<script>window.location.href = 'new_view_order.php?res_id=$res_id'</script>";		
?>