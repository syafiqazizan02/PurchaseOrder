<?php
	if(isset($_POST['submit'])){
		
		$res_id = $_POST['res_id'];
		
		include('db_connect.php');
		
		$sql = "select * from request where res_id = '$res_id'";
		
		$run = mysql_query($sql);
		
		while($row=mysql_fetch_array($run))
		{	
			$client_name = $row['client_name'];
			$company_name = $row['company_name'];
			$company_pic = $row['company_pic'];
			$company_email = $row['company_email'];
			$total = $row['total'];
			$address = $row['address'];
			$postcode = $row['postcode'];
			$city = $row['city'];
			$state = $row['state'];
			$redate = $row['redate'];
			$prodate = $row['prodate'];
			$po_no = $row['po_no'];
			$attn = $row['attn'];
			$branch = $row['branch'];
			$branch_address = $row['branch_address'];
			
		}
		
		$sql2 = "select * from item where res_id='$res_id'";
					
		$run2 = mysql_query($sql2);
			
		while($row2=mysql_fetch_array($run2))
		{
			$product = $row2['product'];
			$model = $row2['model'];
			$description = $row2['description'];
			$shipping = $row2['shipping'];
			$price = $row2['price'];
			$quantity = $row2['quantity'];
			$eta = $row2['eta'];
			$remark = $row2['remark'];
			$amount = $row2['amount'];
			$gst = $row2['gst'];
			$t_amount = $row2['t_amount'];
		}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Purchase Order</title>
</head>
<body>

<center><img src="image/header.png"></center>
<hr>
<div>
	<div style="float:left;">
		<table width="420px">
			<tr height="80">
				<td align="center" style="border: 1px solid black;">&nbsp;VENDOR:&nbsp;</td>
				<td style="border: 1px solid black;"><?php echo $company_name; ?><br><?php echo $address; ?>,&nbsp;<br><?php echo $postcode; ?>,&nbsp;<?php echo $city; ?>,<br><?php echo $state; ?>.</td>
			</tr>
			<tr height="60">
				<td align="center" style="border: 1px solid black;">Attn:<br>Email:</td>
				<td style="border: 1px solid black;">&nbsp;<?php echo $company_pic; ?><br>&nbsp;<?php echo $company_email; ?>&nbsp;</td>	
			</tr>
		</table>
	</div>
	
	<div style="float:right;">
		<div>
			<h2 align="right" style="color:#ff9900;">PURCHASE ORDER</h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label style="font-size:16px;"><b>GST NO : 0011163340224</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
		<div>
			<table align="right" width="80%">
				<tr align="center" height="30">
					<td style="border: 1px solid black;">DATE:</td>
					<td style="border: 1px solid black;"><?php echo date('d/m/Y',strtotime($prodate)); ?></td>
				</tr>
				<tr align="center" height="30">
					<td style="border: 1px solid black;">P.O.#:</td>
					<td style="border: 1px solid black;"><?php echo $po_no; ?></td>	
				</tr>
			</table>
		</div>
	</div>
</div><br><br><br><br><br><br><br><br><br><br>

<style>
table, th{
    border: 1px solid black;
    border-collapse: collapse;
}
td{
	border-style: solid;
    border-width: 0 1px 0 1px;
}
</style>

	<table width="100%" height="680px">
		<tr align="center" bgcolor="#ccccb3" height="80">
			<th>ITEM NUMBER</th>
			<th>DESCRIPTION</th>
			<th>RATE (RM)</th>
			<th>QUANTITY</th>
			<th>AMOUNT (RM)</th>
		</tr>

		<?php 
			$sql3 = "select * from item WHERE res_id='$res_id'";
							
			$run3 = mysql_query($sql3);
			
			$t_amount = 0;
						
			$t_gst = 0;
			
			$total_row = mysql_num_rows($run3);
			
			$count_row = 0;
			
			while($row3=mysql_fetch_array($run3))
			{
				$count_row++;
				
				$product = $row3['product'];
				$model = $row3['model'];
				$price = $row3['price'];
				$quantity = $row3['quantity'];
				$amount = $row3['amount'];
				$gst = $row3['gst'];
				
				echo'<tr align="center" height="30">
						<td>'.$product.'</td>
						<td>'.$model.'</td>
						<td>&nbsp;'.number_format($price, 2).'&nbsp;</td>
						<td>'.$quantity.'</td>
						<td>&nbsp;'.number_format($amount, 2).'&nbsp;</td>
						
				</tr>';
				
				if($count_row%20==0){
?>
</table>

<center><img src="image/header.png"></center>
<hr>
<div>
	<div style="float:left;">
		<table width="420px">
			<tr height="80">
				<td align="center" style="border: 1px solid black;">&nbsp;VENDOR:&nbsp;</td>
				<td style="border: 1px solid black;"><?php echo $company; ?><br><?php echo $address; ?>,&nbsp;<br><?php echo $postcode; ?>,&nbsp;<?php echo $city; ?>,<br><?php echo $state; ?>.</td>
			</tr>
			<tr height="60">
				<td align="center" style="border: 1px solid black;">Attn:<br>Email:</td>
				<td style="border: 1px solid black;">&nbsp;<?php echo $supplier; ?><br>&nbsp;<?php echo $email; ?>&nbsp;</td>	
			</tr>
		</table>
	</div>
	
	<div style="float:right;">
		<div>
			<h2 align="right" style="color:#ff9900;">PURCHASE ORDER</h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label style="font-size:16px;"><b>GST NO : 0011163340224</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
		<div>
			<table align="right" width="80%">
				<tr align="center" height="30">
					<td style="border: 1px solid black;">DATE:</td>
					<td style="border: 1px solid black;"><?php echo date('d/m/Y',strtotime($prodate)); ?></td>
				</tr>
				<tr align="center" height="30">
					<td style="border: 1px solid black;">P.O.#:</td>
					<td style="border: 1px solid black;"><?php echo $po_no; ?></td>	
				</tr>
			</table>
		</div>
	</div>
</div><br><br><br><br><br><br><br><br><br><br>

	<table width="100%" height="680px">
		<tr align="center" bgcolor="#ccccb3" height="80">
			<th>ITEM NUMBER</th>
			<th>DESCRIPTION</th>
			<th>RATE (RM)</th>
			<th>QUANTITY</th>
			<th>AMOUNT (RM)</th>
		</tr>

<?php
				}
				
				$t_amount += $amount;
						
				$t_gst += $gst;
			}
				
			mysql_close($con);
			
			
	}	
		
		if(($total_row%20)>10){
		
?>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

</table>

<center><img src="image/header.png"></center>
<hr>
<div>
	<div style="float:left;">
		<table width="420px">
			<tr height="80">
				<td align="center" style="border: 1px solid black;">&nbsp;VENDOR:&nbsp;</td>
				<td style="border: 1px solid black;"><?php echo $company; ?><br><?php echo $address; ?>,&nbsp;<br><?php echo $postcode; ?>,&nbsp;<?php echo $city; ?>,<br><?php echo $state; ?>.</td>
			</tr>
			<tr height="60">
				<td align="center" style="border: 1px solid black;">Attn:<br>Email:</td>
				<td style="border: 1px solid black;">&nbsp;<?php echo $supplier; ?><br>&nbsp;<?php echo $email; ?>&nbsp;</td>	
			</tr>
		</table>
	</div>
	
	<div style="float:right;">
		<div>
			<h2 align="right" style="color:#ff9900;">PURCHASE ORDER</h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label style="font-size:16px;"><b>GST NO : 0011163340224</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
		<div>
			<table align="right" width="80%">
				<tr align="center" height="30">
					<td style="border: 1px solid black;">DATE:</td>
					<td style="border: 1px solid black;"><?php echo date('d/m/Y',strtotime($prodate)); ?></td>
				</tr>
				<tr align="center" height="30">
					<td style="border: 1px solid black;">P.O.#:</td>
					<td style="border: 1px solid black;"><?php echo $po_no; ?></td>	
				</tr>
			</table>
		</div>
	</div>
</div><br><br><br><br><br><br><br><br><br><br>

	<table width="100%" height="680px">
		<tr align="center" bgcolor="#ccccb3" height="80">
			<th>ITEM NUMBER</th>
			<th>DESCRIPTION</th>
			<th>RATE (RM)</th>
			<th>QUANTITY</th>
			<th>AMOUNT (RM)</th>
		</tr>

		<?php } ?>
		
		<tr style="vertical-align: bottom;">
			<td></td>
			<td>
				<b>End User:</b><br><?php echo $client_name; ?><br><br><br>PLEASE DELIVER TO:<br><br><b><?php echo $branch; ?></b><br><br><b><?php echo $branch_address; ?></b><br><br><b>ATTN:&nbsp;<?php echo $attn; ?></b><br>
			</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr align="center" height="30">
			<td colspan="4" style="border: 1px solid black;"><b>SUB TOTAL&nbsp;</td>
			<td style="border: 1px solid black;"><b>&nbsp;RM&nbsp;<?php echo number_format($t_amount, 2); ?></b></td>
		</tr>
		<tr align="center" height="30">
			<td colspan="4" style="border: 1px solid black;"><b>GST 6%&nbsp;</th>
			<td style="border: 1px solid black;"><b>&nbsp;RM&nbsp;<?php echo number_format($t_gst, 2); ?>&nbsp;</b></td>
		</tr>
		<tr align="center" bgcolor="#ccccb3" height="30">
			<td  colspan="4" style="border: 1px solid black;"><b>TOTAL&nbsp;</b></td>
			<td style="border: 1px solid black;"><b>&nbsp;RM&nbsp;<?php echo number_format($total, 2); ?>&nbsp;</b></td>
		</tr>
		
	</table>

	
	<script>
		window.print();
	</script>
	
	
	
	


</body>
</html>
